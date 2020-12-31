<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
  protected $fillable =[
    'date','image','short_title','long_title','created_by','updated_by',
  ];
}
