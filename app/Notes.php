<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
	protected $fillable=['title','body','important'];
    //
    public function isImportant(){
    	return $this->important==1;
    }
}
