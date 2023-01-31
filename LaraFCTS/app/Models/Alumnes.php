<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnes extends Model
{
    use HasFactory;
    protected $table = 'Alumnes';
    protected $primaryKey = 'IdAlumne';
    protected $fillable=['IdAlumne','NomAlumne','CognomAlumne','DNI','Curs','Cicle','Telefon','Correu','IdTutor','IsPractiques','RutaCurriculum'];

    
}
