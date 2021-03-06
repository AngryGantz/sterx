<?php namespace Angrygantz\Portfolio\Models;

use Model;

/**
 * Project Model
 */
class Project extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'angrygantz_portfolio_projects';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = ['attachments' => ['System\Models\File']];

}