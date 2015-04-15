<?php namespace Angrygantz\Textblock\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Text Blocks Back-end Controller
 */
class TextBlocks extends Controller
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

        BackendMenu::setContext('Angrygantz.Textblock', 'textblock', 'textblocks');
    }
}