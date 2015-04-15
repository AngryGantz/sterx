<?php namespace Angrygantz\Textblock\Models;

use Model;

/**
 * TextBlock Model
 */
class TextBlock extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'angrygantz_textblock_text_blocks';

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
    public $attachMany = [];

}