<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnes extends Model
{
    use HasFactory;
    protected $table = 'alumnes';
    protected $primaryKey = 'IdAlumne';
    protected $fillable=['IdAlumne','NomAlumne','CognomAlumne','DNI','Curs','Cicle','Telefon','Correu','IdTutor','IsPractiques','RutaCurriculum'];

    public function ofertes(){
        return $this->belongsToMany(Ofertes::class, "enviaments","idOferta","IdAlumne")->withTimestamps();
    }


    public function estudis(){
        return $this->BelongsTo(Estudis::class,'IdEstudi','Cicle');
    }

}
