<?php namespace JorgeAndrade\OctoDonations\Controllers;

use Flash;
use Mail;
use BackendMenu;
use Backend\Classes\Controller;
use JorgeAndrade\OctoDonations\Classes\Donation;
use JorgeAndrade\OctoDonations\Models\Donatione;
use JorgeAndrade\OctoDonations\Models\Settings;

/**
 * Donationes Back-end Controller
 */
class Donationes extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('JorgeAndrade.OctoDonations', 'octodonations', 'donationes');
        $this->addJs('/plugins/jorgeandrade/octodonations/assets/js/octodonations.js');
    }

    public function index()
    {
        $this->vars['completed'] = Donatione::IsLive()->whereIsComplete(1)->count();
        $this->vars['canceled'] = Donatione::IsLive()->whereIsCancel(1)->count();
        $this->vars['uncompleted'] = Donatione::IsLive()->whereIsComplete(0)->whereIsCancel(0)->count();
        $this->vars['totalEarned'] = Donatione::IsLive()->whereIsComplete(1)->sum('amount');
        $this->vars['totalLost'] = Donatione::IsLive()->whereIsCancel(1)->sum('amount');

        $this->vars['totalEarnedMonth'] = Donatione::IsLive()->ThisMonth()->whereIsComplete(1)->sum('amount');
        $this->vars['EarnedLastMonth'] = Donatione::IsLive()->LastMonth()->whereIsComplete(1)->sum('amount');
        $this->vars['totalLostMonth'] = Donatione::IsLive()->ThisMonth()->whereIsCancel(1)->sum('amount');
        $this->vars['LostLastMonth'] = Donatione::IsLive()->LastMonth()->whereIsCancel(1)->sum('amount');
        // $this->vars['betterDonor'] = Donatione::IsLive()->ThisMonth()->whereIsComplete(1)->orderBy('amount', 'desc')->get();

        $this->asExtension('ListController')->index();
    }

    /**
     * {@inheritDoc}
     */
    public function listInjectRowClass($record, $definition = null)
    {
        if ($record->is_cancel)
            return 'safe disabled';
    }

    public function onSendForm()
    {
        $this->asExtension('FormController')->update(post('record_id'));
        $this->vars['recordId'] = post('record_id');
        return $this->makePartial('send_form');
    }

    public function onSend()
    {
        $donator = Donatione::find(post('record_id'))->toArray();
        $data = array_merge($donator, ["msg" => post('Donatione[message]')]);
        Mail::send('jorgeandrade.octodonations::mail.hi', $data, function($message) use ($data) {
            $message->to($data['email'], $data['name']);
        });
        return \Flash::success('Mail has been sent');
    }

    public function listExtendQuery($query)
    {
        $islive = (Settings::get('mode') == 'live') ? 1 : 0;
        $query->whereIsLive($islive);
    }
}