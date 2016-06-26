<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Trainers extends Model
{
    protected $fillable= ['trainer_name','trainer_name_first','trainer_name_second','trainer_name_third','trainer_about','trainer_picture'];


}
