<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;

class AsignaturaController extends Controller
{
    protected $asignaturas;

    public function __construct(Asignatura $asignaturas){
        $this->asignaturas = $asignaturas;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignaturas = $this->asignaturas->obtenerAsignaturas();
        return view('asignaturas.ver', ['asignatura' => $asignaturas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asignaturas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignatura = new Asignatura($request->all());
        $asignatura->save();
        return redirect()->action([AsignaturaController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nombre)
    {
        $asignatura = $this->asignaturas->obtenerAsignaturaPorCod($nombre);
        return view('asignaturas.ver', ['asignatura' => $asignatura]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($codAs)
    {
        $asignatura = $this->asignaturas->obtenerAsignaturaPorCod($codAs);
        return view('asignaturas.editar', ['asignatura' => $asignatura]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $codAs)
    {
        $asignatura = Asignatura::find($codAs);
        $asignatura->fill($request->all());
        $asignatura->save();
        return redirect()->action([AsignaturaController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nombre)
    {
        $asignatura = Asignatura::find($nombre);
        $asignatura->delete();
        return redirect()->action([AsignaturaController::class, 'index']);
    }
}
