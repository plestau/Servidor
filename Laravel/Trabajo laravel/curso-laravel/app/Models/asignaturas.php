<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class asignaturas extends Model
{
    use HasFactory;

    protected $table = "asignaturas";

    protected $fillable = [
        'codAs',
        'nombreAs',
        'nombreCortoAs',
        'profesorAs',
        'colorAs',
        'user_id'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $primaryKey = 'codAs';
    protected $keyType = 'string';

    public function obtenerAsignaturas()
    {
        return asignaturas::all();
    }

    public function obtenerAsignaturaPorId($id)
    {
        return asignaturas::find($id);
    }

    public function obtenerAsignaturaPorUsuario($id)
    {
        return asignaturas::where('user_id', $id)->get();
    }

    public function obtenerUltimoID()
    {
        return asignaturas::orderBy('codAs', 'desc')->first();
    }

    public function obtenerAsignaturaPorDiaHora($dia, $hora)
    {
        $id = Auth::user()->id;
        $query = DB::table('horas')
            ->join('asignaturas', 'horas.asignatura_id', '=', 'asignaturas.codAs')
            ->where('asignaturas.user_id', $id)
            ->where('horas.diaH', $dia)
            ->where('horas.horaH', $hora)
            ->first();
        return $query;
    }

    public function horas(){
        return $this->hasMany(Hora::class, 'asignatura_id', 'codAs');
    }
}
