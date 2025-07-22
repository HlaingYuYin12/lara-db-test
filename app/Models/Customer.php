<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //why use model? >>>> db table permission 
    use HasFactory;

    protected $fillable = ['name','email','address','phone']; //$fillable is fixed var name
}
