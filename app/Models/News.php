<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class News extends Model
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
    protected $table='news';
    protected $fillable= ['news','news_picture','section','news_message'];

    public function getCreatedAtAttribute($date){
        return Carbon::createFromFormat('Y-m-d H:i:s',$date)->format('H:i:s / d.m.Y');
    }




}
