<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forum extends Model
{
    protected $fillable = ['id_pengguna','nama','thread','deskripsi','gambar'];


public function comments()
{
	return $this->morphMany('App\komen','commentable');
}

public function commentsdok()
{
	return $this->morphMany('App\komendok','commentable');
}

}

