<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 07-09-18
 * Time: 02:13 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subject';
    public $timestamps = false;

    protected $fillable = [
        'id', 'name', 'uvs'
    ];

    protected $hidden = [];
}