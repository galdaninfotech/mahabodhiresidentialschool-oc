<?php namespace JorgeAndrade\OctoDonations;

use System\Classes\PluginBase;

/**
 * OctoDonations Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'OctoDonations',
            'description' => 'This plugin allow frontend users make a donations.',
            'author'      => 'JorgeAndrade',
            'icon'        => 'icon-paypal'
        ];
    }

    public function registerComponents()
    {
        return [
            'JorgeAndrade\OctoDonations\Components\Donation'       => 'donationForm',
            'JorgeAndrade\OctoDonations\Components\Success'       => 'success',
            'JorgeAndrade\OctoDonations\Components\Cancel'       => 'cancel'
        ];
    }

    public function registerPermissions()
    {
        return [
            'jorgeandrade.octodonations.donation'       => ['tab' => 'OctoDonations', 'label' => 'Access donations'],
        ];
    }

    public function registerNavigation()
    {
        return [
            'octodonations' => [
                'label'       => 'OctoDonations',
                'url'         => \Backend::url('jorgeandrade/octodonations/donationes'),
                'icon'        => 'icon-paypal',
                'permissions' => ['jorgeandrade.octodonations.*'],
                'order'       => 600,

                'sideMenu' => [
                    'donations' => [
                        'label'       => 'Donations',
                        'icon'        => 'icon-paypal',
                        'url'         => \Backend::url('jorgeandrade/octodonations/donationes'),
                        'permissions' => ['jorgeandrade.octodonations.donation'],
                    ]
                ]

            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'octodonations' => [
                'label'       => 'OctoDonations settings',
                'icon'        => 'icon-paypal',
                'description' => 'Configure PayPal API Email, Client ID and Secret options.',
                'category'    => 'OctoDonations',
                'class'       => 'JorgeAndrade\OctoDonations\Models\Settings',
                'order'       => 600
            ]
        ];
    }

    public function registerMailTemplates()
    {
        return [
            'jorgeandrade.octodonations::mail.thanks' => 'Thanks message for donator',
            'jorgeandrade.octodonations::mail.hi' => 'Hi message for donator'
        ];
    }

}
