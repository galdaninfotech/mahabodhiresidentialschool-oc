<?php namespace JorgeAndrade\OctoDonations\Models;

use October\Rain\Database\Model;


class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'jorgeandrade_octodonations_settings';

    public $settingsFields = 'fields.yml';

    /**
     * Validation rules
     */
    public $rules = [
        'client_id'     => 'required',
        'paypal_id'     => 'required|email',
        'secret'        => 'required',
        'mode'          => 'required',
        'success'       => 'required',
        'cancel'        => 'required'
    ];
}