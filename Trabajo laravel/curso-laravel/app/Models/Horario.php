<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Horario extends Model
{
    use HasFactory;

    protected $table = 'horas';

    /*protected $fillable = ['diaH', 'horaH', 'codigoAs', 'created_at', 'updated_at'];

    protected $primaryKey = ['diaH', 'horaH'];
    protected $keyType = 'array';*/

    public function obtenerHorarios(){
        $horario = DB::select('SELECT* from horas');
        return view('horario.ver', ['horario' => $horario]);
    }

    public function obtenerHorario($diaH, $horaH){
        $horario = DB::select('SELECT* from horas where diaH = ? and horaH = ?', [$diaH, $horaH]);
        return view('horario.ver', ['horario' => $horario]);
    }
}
?>
