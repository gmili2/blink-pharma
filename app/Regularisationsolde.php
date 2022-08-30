<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Regularisationsolde extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $date = ['deleted_at'];
}

