<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $table = 'horas';

    protected $fillable = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];

    protected $hidden = 'CodAs';

    public function obtenerHorarios(){
        return Horario::all();
    }

    public function obtenerHorarioPorNombre($nombreAs){
        return Horario::find($nombreAs);
    }
}
?>
