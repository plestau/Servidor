<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;

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
        $horarios = $this->horarios->obtenerHorarios();
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
        $horario = new Horario($request->all());
        $horario->save();
        return redirect()->action([HorarioController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nombre)
    {
        $horario = $this->horarios->obtenerHorarioPorNombre($nombre);
        return view('horario.ver', ['horario' => $horario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nombre)
    {
        $horario = $this->horarios->obtenerHrarioPorNombre($nombre);
        return view('horario.editar', ['horario' => $horario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nombre)
    {
        $horario = Horario::find($nombre);
        $horario->fill($request->all());
        $horario->save();
        return redirect()->action([HorarioController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nombre)
    {
        $horario = Horario::find($nombre);
        $horario->delete();
        return redirect()->action([HorarioController::class, 'index']);
    }
}
