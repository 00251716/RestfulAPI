<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 07-09-18
 * Time: 02:13 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';
    public $timestamps = false;

    protected $fillable = [
        'title', 'date', 'description', 'type',
    ];

    protected $hidden = [];
}