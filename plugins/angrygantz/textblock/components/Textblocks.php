<?php namespace Angrygantz\Textblock\Components;

use Cms\Classes\ComponentBase;
use Angrygantz\Textblock\Models\Textblock;

class Textblocks extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Textblocks Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getBlocks()
{
    return Textblock::orderBy('id', 'desc')->get();
}

}