<?php

namespace App;



use Illuminate\Database\Eloquent\Model;

class hasil extends Model
{
   protected $fillable = ['g1','g2','g3','g4','g5','g6','g7','g8','g9','g10','g11','g12','g13','g14','g15','g16','g17','g18','g19','g20','g21','total'];

   public function latepost()
{
	return $this->hasMany('\App\hasil')->latest(); 
}
}
 

