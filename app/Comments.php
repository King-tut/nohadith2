<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
  protected $table = 'wtf'; 

protected $fillable = [
        'comment', 'name', 'pageid'
    ];

}
