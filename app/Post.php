<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    //important****
    use HasFactory;

    protected $fillable = ['name','email','phone','location','today_date'];
}
