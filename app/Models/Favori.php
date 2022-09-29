<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favori extends Model
{
    // use SoftDeletes;

    //protected $fillable = ['title', 'pathimage', 'datedebut', 'datefin', 'user_id'];
    //  protected $date = ['deleted_at'];
    use HasFactory;
}


