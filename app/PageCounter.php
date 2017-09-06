<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageCounter extends Model
{
  protected $table = 'pagestats'; 

  protected $primaryKey = 'pagename';
  public $incrementing = false;

protected $fillable = [
        'pagename', 'hits', 'pageid'
    ];

}
