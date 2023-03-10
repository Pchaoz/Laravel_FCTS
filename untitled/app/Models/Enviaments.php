<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enviaments extends Model
{
    use HasFactory;
    protected  $table="enviaments";
    protected  $primaryKey="idEnviaments";
    protected  $fillable =["idEnviaments","estat","observacions","creatPer"];

    public function usuari(){
        return $this->BelongsTo(User::class,'idUser','creatPer');
    }
}
