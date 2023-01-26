<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use Illuminate\Support\Facades\DB;

class HorarioController extends Controller
{
    protected $horarios;

    public function __construct(Horario $horarios){
        $this->horarios = $horarios;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = DB::select('select * from horas where diaH = ? and horaH = ?', ['Lunes', '8:00']);
 
        return view('horario.ver', ['horarios' => $horarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horario.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horario = new Horario();
        $horario->diaH = $request->diaH;
        $horario->horaH = $request->horaH;
        $horario->codigoAs = $request->codigoAs;
        $horario->save();
        return redirect()->action([HorarioController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($diaH, $horaH)
    {
        $horario = $this->horarios->obtenerHorario($diaH, $horaH);
        return view('horario.ver', ['horario' => $horario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($diaH, $horaH)
    {
        $horario = Horario::find($diaH, $horaH);
        return view('horario.editar', ['horario' => $horario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $diaH, $horaH)
    {
        $horario = Horario::find($diaH, $horaH);
        $horario->diaH = $request->diaH;
        $horario->horaH = $request->horaH;
        $horario->codigoAs = $request->codigoAs;
        $horario->save();
        return redirect()->action([HorarioController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($diaH, $horaH)
    {
        $horario = Horario::find($diaH, $horaH);
        $horario->delete();
        return redirect()->action([HorarioController::class, 'index']);
    }
}
