<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    protected $fillable= ['who','theme','message'];

    public function getCreatedAtAttribute($date){
        return Carbon::createFromFormat('Y-m-d H:i:s',$date)->format('H:i:s / d.m.Y');
    }
}
