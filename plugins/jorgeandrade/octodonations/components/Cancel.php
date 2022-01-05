<?php namespace JorgeAndrade\OctoDonations\Components;

use Redirect;
use Session;
use Cms\Classes\ComponentBase;
use JorgeAndrade\OctoDonations\Models\Donatione;
use JorgeAndrade\OctoDonations\Models\Settings;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Cancel extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Cancel Component',
            'description' => 'Allow say thanks to frontend user'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->addCss('/plugins/jorgeandrade/octodonations/assets/css/octodonation.css');
        try {
            $settings = Settings::instance();

            $paymentid = Donatione::whereHash(Session::get('paypal_hash'))->where('is_cancel', 0)->firstOrFail();
            
            $paymentid->is_cancel = 1;
            $paymentid->save();

            Session::forget('paypal_hash');

            return Redirect::to('/');

        } catch (ModelNotFoundException $e) {
            return Redirect::to('/');
        }
        
    }

}