<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\User;
use App\Models\Inscripcion;
use App\Models\Experiencia;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_eventos()
    {
        $eventos = Evento::all();
        return response()->json($eventos);
    }

    public function info_evento($id)
    {
        $evento = Evento::find($id);
        return response()->json($evento);
    }

    public function evento_por_categoria($categoria)
    {
        $eventos = Evento::where('categoria_id', $categoria)->get();
        return response()->json($eventos);
    }

    public function info_asistente($id)
    {
        $asistente = User::find($id);
        return response()->json($asistente);
    }

    public function inscripciones_asistente($id)
    {
        $inscripcionesAsistente = Inscripcion::where('user_id', $id)->get();
        return response()->json($inscripcionesAsistente);
    }

    public function info_evento_asistente($id, $idEvento)
    {
        $infoEventoAsistente = Inscripcion::select('numEntradas', 'estado')
            ->where('user_id', $id)
            ->where('evento_id', $idEvento)
            ->get();
        return response()->json($infoEventoAsistente);
    }
    public function index_experiencias()
    {
        $experiencias = Experiencia::all();
        return response()->json($experiencias);
    }
    public function crear_evento(Request $request)
    {
        $evento = new Evento();

        $evento->nombre = $request->nombre;
        $evento->fecha = $request->fecha;
        $evento->hora = $request->hora;
        $evento->descripcion = $request->descripcion;
        $evento->ciudad = $request->ciudad;
        $evento->direccion = $request->direccion;
        $evento->estado = $request->estado;
        $evento->aforoMax = $request->aforoMax;
        $evento->tipo = $request->tipo;
        $evento->numMaxEntradasPersona = $request->numMaxEntradasPersona;
        $evento->imagen = $request->imagen;
        $evento->categoria_id = $request->categoria_id;
        $evento->user_id = $request->user_id;

        $evento->save();

        return response()->json(['message' => 'Evento creado con exito'], 201);
    }

    public function borrar_evento($id)
    {
        $eventoABorrar = Evento::destroy($id);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
