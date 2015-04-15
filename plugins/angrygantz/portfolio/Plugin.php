<?php namespace Angrygantz\Portfolio;

use System\Classes\PluginBase;

/**
 * portfolio Plugin Information File
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
            'name'        => 'portfolio',
            'description' => 'Simple portfolio plugin',
            'author'      => 'AngryGantz',
            'icon'        => 'icon-briefcase'
        ];
    }

    public function registerNavigation()
    {
        return [
            'portfolio' => [
                'label'       => 'Портфолио',
                'url'         => \Backend::url('angrygantz/portfolio/projects'),
                'icon'        => 'icon-briefcase',
                'order'       => 500,
                'sideMenu' => [
                    'projects' => [
                        'label'       => 'Проекты',
                        'icon'        => 'icon-briefcase',
                        'url'         => \Backend::url('angrygantz/portfolio/projects'),
                    ],
                ]

            ]
        ];
    }

    public function registerComponents()
    {
        return ['Angrygantz\Portfolio\Components\Projects' => 'projects'];
    }

}
