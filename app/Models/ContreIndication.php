<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class ContreIndication extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at'];

    //
}