<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 07-09-18
 * Time: 02:13 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exam';
    public $timestamps = false;

    protected $fillable = [
        'description', 'percentage', 'date','section_id'
    ];

    protected $hidden = [];
}