<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Photo extends Model
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
    protected $table='photo';
    protected $fillable= ['email','photo','name_f','name_s','yo','city','about'];





}
