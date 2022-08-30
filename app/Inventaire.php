<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Inventaire extends Model
{
    use SoftDeletes;
    protected $date = ['deleted_at'];

    //
}
