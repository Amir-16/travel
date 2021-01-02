<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable =[
    'address','mobile_no','email','facebook','twitter','youtube','google_plus','created_by','updated_by',
  ];

}
