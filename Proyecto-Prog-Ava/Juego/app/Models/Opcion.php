<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class opcion extends Model{
    /*referencia a la tabla de la base de datos*/
    protected $table = 'opcion';
    //para saber si en la tabla usamos created_at y updated_at
    public $timestamps = false;
    //lista blancas campos publicos
    protected $fillable = ['opcion', 'estado', 'id_pregunta'];
    //lista negra campos que no quieren que se encuentren facilmente
    protected $guarded = ['id'];
    
    //Relacion PERNECE A
    public function Pregunta(){
        return $this->belongsTo('App\Models\pregunta', 'id_pregunta');
    }
}