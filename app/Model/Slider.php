<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $fillable =[
    'image','short_title','long_title','created_by','updated_by',
  ];
}
