<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komen extends Model
{
    public function commentable()
    {
    	return $this-morphTo();
    }
}
