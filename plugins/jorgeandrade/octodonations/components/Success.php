<?php namespace JorgeAndrade\OctoDonations\Components;

use Redirect;
use Session;
use Mail;
use Cms\Classes\ComponentBase;
use JorgeAndrade\OctoDonations\Models\Donatione;
use JorgeAndrade\OctoDonations\Models\Settings;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use \PayPal\Api\Payment;
use \PayPal\Api\PaymentExecution;
use \PayPal\Rest\ApiContext;
use \PayPal\Auth\OAuthTokenCredential;

class Success extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Success Component',
            'description' => 'Allow say thanks to frontend user'
        ];
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'       => 'Title',
                'description' => 'Title for success transaction',
                'type'        => 'string',
                'default'     => 'Success.',
            ],
            'description' => [
                'title'       => 'Description of the form',
                'description' => 'Description for success transaction',
                'type'        => 'string',
                'default'     => 'Hi thank you for invite me a cup of coffee.',
            ]
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/jorgeandrade/octodonations/assets/css/octodonation.css');
        
        if (get('paymentId') === null) {
           $this->page['title'] = 'Error.';
           $this->page['result'] = 'An error has ocurred.';
        }else{
            try {
                $settings = Settings::instance();
                $PayerID = get('PayerID');

                $paymentid = Donatione::whereHash(Session::get('paypal_hash'))->where('is_complete', 0)->firstOrFail();
                $api = new ApiContext(
                    new OAuthTokenCredential(
                        $settings->client_id, 
                        $settings->secret
                    )
                );

                $payment = Payment::get($paymentid->paymentid, $api);
                
                $execution = new PaymentExecution();
                $execution->setPayerId($PayerID);

                $payment->execute($execution, $api);
                
                $paymentid->is_complete = 1;
                $paymentid->save();

                Session::forget('paypal_hash');

                $this->page['title'] = $this->property('title');
                $this->page['result'] = $this->property('description');

                $donator = $paymentid->toArray();

                Mail::send('jorgeandrade.octodonations::mail.thanks', $donator, function($message) use ($donator) {
                    $message->to($donator['email'], $donator['name']);
                });

            } catch (ModelNotFoundException $e) {
                $this->page['title'] = 'Success.';
                $this->page['result'] = 'The transacction is has been already processed.';
            }
        }
    }

}