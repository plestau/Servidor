<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\asignaturas;

class AsignaturaController extends Controller
{
    protected $asignaturas;
    public function __construct(asignaturas $asignaturas)
    {
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
        return view('asignaturas.lista', ['asignaturas' => $asignaturas]);
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
        $asignatura = new asignaturas($request->all());
        $asignatura->save();
        return redirect()->action([AsignaturaController::class, 'index']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignaturas = $this->asignaturas->obtenerAsignaturaPorId($id);
        return view('asignaturas.editar', ['asignatura' => $asignaturas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $asignatura = asignaturas::find($id);
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
    public function destroy($id)
    {
        $asignaturas = asignaturas::find($id);
        $asignaturas->delete();
        return redirect()->action([AsignaturaController::class, 'index']);
    }
}
