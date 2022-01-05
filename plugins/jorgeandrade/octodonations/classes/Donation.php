<?php namespace JorgeAndrade\OctoDonations\Classes;

use Config;
use Session;
use Hash;
use URL;
use JorgeAndrade\OctoDonations\Models\Settings;
use JorgeAndrade\OctoDonations\Models\Donatione;
use \PayPal\Rest\ApiContext;
use \PayPal\Auth\OAuthTokenCredential;
use \PayPal\Api\Payer;
use \PayPal\Api\Details;
use \PayPal\Api\Amount;
use \PayPal\Api\Transaction;
use \PayPal\Api\Payment;
use \PayPal\Api\RedirectUrls;

class Donation
{
    protected $api;

    protected $settings;

    protected $payer;

    protected $details;

    protected $amount;

    protected $transaction;

    protected $payment;

    protected $redirecturls;

    protected $price;

    protected $currency;

    protected $donator;

    public function __construct($amount='5.00', $currency = 'USD', $donator = [])
    {
        $this->settings = Settings::instance();
        $this->payer = new Payer();
        $this->details = new Details();
        $this->amount = new Amount();
        $this->transaction = new Transaction();
        $this->payment = new Payment();
        $this->redirecturls = new RedirectUrls();
        $this->price = $amount;
        $this->currency = $currency;

        if (is_null($this->verifDonator($donator))) {
            throw new DonationException("Minimun pass a email donator.");
        }
        $this->donator = $donator;

        $this->api = new ApiContext(
            new OAuthTokenCredential(
                $this->settings->client_id, 
                $this->settings->secret
            )
        );
        $this->api->setConfig([
            'mode' => $this->settings->mode,
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => false,
            'log.FileName' => '',
            'log.LogLevel' => 'FINE',
            'validation.level' => 'log'
        ]);


        $this->createDonation();

    }

    public function createDonation()
    {
        $this->payer->setPaymentMethod('paypal');
        $this->details->setShipping('0.00')
            ->setTax('0.00')
            ->setSubtotal($this->price);

        $this->amount->setCurrency($this->currency)
            ->setTotal($this->price)
            ->setDetails($this->details);

        $this->transaction->setAmount($this->amount)
            ->setDescription('Donation');

        $this->payment->setIntent("sale")
            ->setPayer($this->payer)
            ->setTransactions([$this->transaction]);

        $this->redirecturls->setReturnUrl($this->getURLS('success'))
            ->setCancelUrl($this->getURLS('cancel'));

        $this->payment->setRedirectUrls($this->redirecturls);
    }

    public function donate()
    {

        try {
            
            $this->payment->create($this->api);

            Session::set('paypal_hash', Hash::make($this->payment->getId()));

            $donation = Donatione::create([
                'name' => $this->donator['name'],
                'email' => $this->donator['email'],
                'country' => $this->donator['country'],
                'comment' => $this->donator['comment'],
                'paymentid' => $this->payment->getId(),
                'amount' => $this->price,
                'currency' => $this->currency,
                'hash' => Session::get('paypal_hash'),
                'is_live' => ($this->settings->mode == 'live') ?1 :0
            ]);

        } catch (\PPConnectionException $e) {
            return null;
        }

        return $this->payment->getApprovalLink();
    }

    public function verifDonator($donator)
    {
        if (array_key_exists('email', $donator)) {
           return $donator;
        }

        return null;
    }

    public function getURLS($url)
    {
        if ($url === 'success'){
            return URL::to($this->settings->success);    
        }

        return URL::to($this->settings->cancel);
    }
}