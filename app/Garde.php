<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Garde extends Model
{
    use SoftDeletes;


    protected $date = ['deleted_at'];


}
