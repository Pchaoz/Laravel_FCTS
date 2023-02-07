<?php

namespace App\Models;

use Database\Seeders\EmpresesSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ofertes extends Model
{
    use HasFactory;
    protected $table = "ofertes";
    protected $primaryKey = "idOferta";
    protected $fillable = ['idOferta','descripcio', 'idEmpresa', 'vacants', 'idCicle', 'curs', 'nomContacte', 'cognomsContacte', 'correuContacte'];

    public function alumnes(){
        return $this->belongsToMany(Ofertes::class, "enviaments","IdAlumne","idOferta")->withTimestamps();
    }
    public function empreses(){
        return $this->belongsTo(Empreses::class);
    }
    public function estudis(){
        return $this->belongsTo(Estudis::class);
    }
    public function enviaments(){
        return $this->belongsToMany(Enviaments::class,"enviaments","idEnviament","idOferta")->withTimestamps();
    }
}
