<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use SoftDeletes;

   //protected $fillable = ['title', 'pathimage', 'datedebut', 'datefin', 'user_id'];
    protected $date = ['deleted_at'];

    //
}
