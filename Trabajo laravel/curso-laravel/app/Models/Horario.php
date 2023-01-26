<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Horario extends Model
{
    use HasFactory;
    protected $table = "horas";
    protected $primaryKey = ['diaH', 'horaH', 'codAs'];
    protected $fillable = ['diaH','horaH','codAs'];
    public $timestamps = false;
    public $incrementing = false;
    public function obtenerHorarios(){
        return DB::table('horas')
        ->leftJoin('asignaturas','horas.codigoAs',"=",'asignaturas.codAs')
        ->orderBy('horaH', 'asc')->orderBy('diaH', 'asc')->get();
    }
    public function obtenerHorario($diaH, $horaH){
        return Horario::find($diaH, $horaH);
    }
}
?>
