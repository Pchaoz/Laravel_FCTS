<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empreses extends Model
{
    use HasFactory;
    protected $table = "Empresas";
    protected $primaryKey = "idEmpresa";
    protected $fillable = ["idEmpresa", 'nom', 'adreça', 'telefon', 'correu'];

    public function ofertes(){
        return $this->hasMany(Ofertes::class);
    }
}
