<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
   
    protected $fillable = ['name', 'password', 'email','profesi','bidang','kontak','alamat','foto'];
}
