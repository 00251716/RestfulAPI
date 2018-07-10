<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 07-09-18
 * Time: 02:13 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'section';
    public $timestamps = false;

    protected $fillable = [
        'sub_id', 'sec_id', 'semester', 'room', 'year', 'schedule'
    ];

    protected $hidden = [];
}