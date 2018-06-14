<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    //
    public function isImportant(){
    	return $this->import==1;
    }
}
