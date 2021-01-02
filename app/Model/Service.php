<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable =[
    'short_title','long_title','created_by','updated_by',
  ];
}
