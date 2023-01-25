<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    use HasFactory;

    protected $table = 'asignaturas';

    protected $fillable = ['codAs', 'nombreAs', 'nombreCortoAs', 'profesorAs', 'colorAs', 'id_user', 'created_at', 'updated_at'];

    protected $primaryKey = 'codAs';
    protected $keyType = 'string';

    public function obtenerAsignaturas(){
        return Asignatura::all();
    }

    public function obtenerAsignaturaPorCod($codAs){
        return Asignatura::find($codAs);
    }
}
?>
