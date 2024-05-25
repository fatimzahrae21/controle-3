<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = ['titre','date_publication','prix','id_auteur'];
    protected $hidden = ['id_auteur'];
    public function auteurs(){
        return $this->belongsTo(Auteur::class,'id_auteur');
}

}
