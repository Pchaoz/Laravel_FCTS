<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudis extends Model
{
    use HasFactory;

    protected  $table="estudis";
    protected $primaryKey="idEstudi";
    protected  $fillable =["idEstudi","nom"];

    public function alumnes(){
        return $this->hasMany(Alumnes::class);
    }


}
