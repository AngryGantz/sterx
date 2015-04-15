<?php namespace Angrygantz\Portfolio\Components;

use Cms\Classes\ComponentBase;
use Angrygantz\Portfolio\Models\Project;

class Projects extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Projects Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getProjects()
    {
        return Project::orderBy('id','desc')->get();
    }

    public function getForHome()
    {
        return Project::where(['showhome' => '1'])->orderBy('id','desc')->get();
    }    

    public function getTypes()
    {
        return Project::groupBy('type')->get();
    }

    public function getByType($type='')
    {
        if ($type=='') {
            return Project::orderBy('id','desc')->get();       
        }
        else{
            return Project::where(['type' => $type])->orderBy('id','desc')->get();
        }
        
    }


}