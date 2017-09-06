<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
  protected $table = 'blogspot'; 

protected $fillable = [
        'bodysmall', 'title', 'metatags','pagename','hits', 'comments' , 'cat'
    ];

}
