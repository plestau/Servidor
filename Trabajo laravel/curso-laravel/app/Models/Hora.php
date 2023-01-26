<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Hora extends Model
{
    use HasFactory;

    protected $table = "horas";
    protected $primaryKey = ['codigoAs', 'diaH', 'horaH'];
    protected $fillable = ['codigoAs', 'diaH', 'horaH'];
    public $incrementing = false;

    public function obtenerHoras()
    {
        return DB::table('horas')->leftJoin('asignaturas','horas.codigoAs',"=",'asignaturas.codAs')
                                 ->leftJoin('users','asignaturas.id_user','=','users.id')
                                 ->where('users.id','=',Auth::user()->id)->get();
    }

    public function obtenerHora($codigoAs, $diaH, $horaH)
    {
        return DB::table('horas')->leftJoin('asignaturas','horas.codigoAs',"=",'asignaturas.codAs')
                                 ->leftJoin('users','asignaturas.id_user','=','users.id')
                                 ->where('horas.codigoAs', $codigoAs)
                                 ->where('diaH', $diaH)
                                 ->where('users.id','=',Auth::user()->id)
                                 ->where('horaH', $horaH)->get();
    }
}