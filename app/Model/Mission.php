<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
      protected $fillable=[

        'image','title','created_by','updated_by',
      ];
}
