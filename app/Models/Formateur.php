<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $fillable = ['nom','cin','email','password'];
    public function groupes(){
        return $this->belongsToMany(Groupe::class);
}

}
