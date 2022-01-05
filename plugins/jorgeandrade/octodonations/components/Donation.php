<?php namespace JorgeAndrade\OctoDonations\Components;

use Redirect;
use Cms\Classes\ComponentBase;
use JorgeAndrade\OctoDonations\Classes\Donation as Donate;
use JorgeAndrade\OctoDonations\Models\Donatione;

class Donation extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Donation Component',
            'description' => 'Set donation form.'
        ];
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'       => 'Title of the form',
                'description' => 'Allow to show a title in the form',
                'type'        => 'string',
                'default'     => 'Invite me a cup of coffee',
            ],
            'currency' => [
                'title'       => 'Currency',
                'description' => 'Currency for the amount of donation.',
                'type'        => 'dropdown',
                'default'     => 'USD',
            ],
            'comment' => [
                'title' => 'Comment',
                'description' => 'Show a little description for donation.',
                'type'        => 'string',
                'default' => 'If you find my open source work useful, please consider making a donation – particularly if you are using it in a commercial context. Your donations will allow me to spend more time developing, maintaining and supporting this work. Please, just think about it as invite me a cup of coffee.'
            ],
            'showComment' => [
                'title'       => 'Show Comment',
                'description' => 'Allow show comment.',
                'type'        => 'dropdown',
                'options' => ['on' => true, 'off' => false],
                'default'     => 'on',
            ],
        ];
    }

    /**
     * @var array Currency options
     */
    public function getCurrencyOptions()
    {
        return [
            "USD" => "USD",
            "MXN" => "MXN",
            "EUR" => "EUR",
            "GBP" => "GBP"
        ];
    }

    public function onRun()
    {
        $this->page['title'] = $this->property('title');
        $this->page['showComment'] = $this->property('showComment');
        $this->page['comment'] = $this->property('comment');

        $this->addCss('/plugins/jorgeandrade/octodonations/assets/css/octodonation.css');
    }

    public function onDonate()
    {
        $donator = [
            'name' => post('name')?:null,
            'email' => post('email'),
            'country' => post('country')?:null,
            'comment' => post('comment')?:null,
        ];
        $validator = \Validator::make([
            'email' => post('email'),
            'amount' => post('amount')?:null,
            'currency' => $this->property('currency'),
        ], Donatione::$rules);

        if ($validator->fails())
        {
            return $this->page['result'] = $validator->messages();
        }

        $donation = new Donate(post('amount'), $this->property('currency'), $donator);
        $donation = $donation->donate();
        if (is_null($donation)) {
            return $this->page['result'] = "An error has ocurred, please try again.";
        }

        $this->page['result'] = "You will be redirect..";

        return Redirect::to($donation);
    }

}