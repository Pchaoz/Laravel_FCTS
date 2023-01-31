<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofertes extends Model
{
    use HasFactory;
    protected $table = "idOferta";
    protected $primaryKey = "idOferta";
    protected $fillable = ["idOferta", 'descripcio', 'idEmpresa', 'vacants', 'idCicle', 'curs', 'nomContacte', 'cognomsContacte', 'correuContacte'];
}
