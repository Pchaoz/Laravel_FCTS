<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnes extends Model
{
    use HasFactory;
    protected $table = 'alumnes';
    protected $primaryKey = 'IdAlumne';
    protected $fillable=['IdAlumne','NomAlumne','CognomAlumne','DNI','Curs','Cicle','Telefon','Correu','IdTutor','IsPractiques','CV'];

    public function ofertes(){
        return $this->belongsToMany(Ofertes::class, "enviaments","idOferta","IdAlumne")->withTimestamps();
    }


    public function estudis(){
        return $this->BelongsTo(Estudis::class,'IdEstudi','Cicle');
    }

    public function enviaments(){
        return $this->belongsToMany(Enviaments::class,"enviaments","idEnviament","idAlumne")->withTimestamps();
    }
}
