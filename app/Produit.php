<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
class Produit extends Model
{
    // use HasFactory;
    use SoftDeletes;

   //protected $fillable = ['title', 'pathimage', 'datedebut', 'datefin', 'user_id'];
    protected $date = ['deleted_at'];

    //
}
