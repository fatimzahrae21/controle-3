<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
   
    // protected $table = 'Owner';
    protected $fillable = ['nom','prenom','date_naissance','id_car'];
    // public $timstamps = false;
    protected $hidden = ['id_car'];
    public function car(){
        return $this->belongsTo(Car::class,'id_car');
}


}
