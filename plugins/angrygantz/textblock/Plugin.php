<?php namespace Angrygantz\Textblock;

use System\Classes\PluginBase;

/**
 * textblock Plugin Information File
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
            'name'        => 'textblock',
            'description' => 'Some inline text block',
            'author'      => 'Angry Gantz',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerNavigation()
    {
        return [
            'textblock' => [
                'label'       => 'Услуги',
                'url'         => \Backend::url('angrygantz/textblock/textblocks'),
                'icon'        => 'icon-list-alt',
                'order'       => 500,
                'sideMenu' => [
                    'textblocks' => [
                        'label'       => 'Текстовые блоки "Услуги"',
                        'icon'        => 'icon-list-alt',
                        'url'         => \Backend::url('angrygantz/textblock/textblocks'),
                    ],           
                ]

            ]
        ];
    }

    public function registerComponents()
{
    return ['Angrygantz\Textblock\Components\Textblocks' => 'textblocks'];
}



}
