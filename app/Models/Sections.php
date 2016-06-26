<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Sections extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $table='sections';
    protected $fillable= ['section_name','section_picture','section_about','trainers'];





}
