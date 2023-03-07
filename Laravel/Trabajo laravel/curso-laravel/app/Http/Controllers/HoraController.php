<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hora;
use App\Models\asignaturas;
use Illuminate\Support\Facades\Auth;

class HoraController extends Controller
{
    protected $hora;
    protected $asignatura;

    public function __construct(Hora $hora, asignaturas $asignatura)
    {
        $this->hora = $hora;
        $this->asignatura = $asignatura;
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $asignaturaElegida = request('asignatura');
        if($asignaturaElegida == 0)
            $query = $this->hora->obtenerHoras($id);
        else
            $query = $this->hora->obtenerHorasPorAsignatura($id, $asignaturaElegida);
        $asignaturas = $this->asignatura->obtenerAsignaturaPorUsuario($id);
        return view("horario", ["horas" => $query, "asignaturas" => $asignaturas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $asignaturas = $this->asignatura->obtenerAsignaturaPorUsuario($id);
        return view("horas.create",["asignaturas" => $asignaturas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "diaH" => "required",
            "horaH" => "required",
            "asignatura_id" => "required"
        ]);

        $hora = new Hora([
            "diaH" => $request->get("diaH"),
            "horaH" => $request->get("horaH"),
            "asignatura_id" => $request->get("asignatura_id")
        ]);

        $hora->save();

        return redirect()->action([HoraController::class, 'index']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($dia, $hora)
    {
        $id = Auth::user()->id;
        $asignaturas = $this->asignatura->obtenerAsignaturaPorUsuario($id);
        $hora = $this->hora->obtenerHora($id, $dia, $hora);
        $hora = $hora[0];
        return view("horas.edit", ["hora" => $hora, "asignaturas" => $asignaturas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $asignatura,$dia, $hora)
    {
        $id = Auth::user()->id;
        $request->validate([
            "diaH" => "required",
            "horaH" => "required",
            "asignatura_id" => "required"
        ]);

        DB::table('horas')->where('diaH', $dia)->where('horaH', $hora)->where('asignatura_id', $asignatura)->update([
            "diaH" => $request->get("diaH"),
            "horaH" => $request->get("horaH"),
            "asignatura_id" => $request->get("asignatura_id")
        ]);

        return redirect()->action([HoraController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($asignatura, $dia, $hora)
    {
        DB::table('horas')->where('diaH', $dia)->where('horaH', $hora)->where('asignatura_id', $asignatura)->delete();
        return redirect()->action([HoraController::class, 'index']);
    }

}