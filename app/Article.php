<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use SoftDeletes;
    public function user(){
    	return $this->belongsTo('App\User');
    }
    
}
