<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    use HasFactory;

    protected $fillable = ['breed'];
    // protected $fillable =['petType', 'petSize', 'petAge', 'date', 'time', 'petGroom', 'petProgram','daysreq','petTrain','walks','petAge'];
}
