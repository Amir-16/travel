<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doner extends Model
{
    protected $fillable=[
      'name','email','mobile','address','blood_group','gender',
    ];
}
