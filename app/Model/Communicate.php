<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Communicate extends Model
{
    protected $fillable=[

        'name','email','mobile_no','address','msg',
      ];
}
