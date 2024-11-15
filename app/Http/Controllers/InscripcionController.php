<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Evento;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($user_id)
    {

        $inscripciones = Inscripcion::where('user_id', intval($user_id))
            ->with(['evento'])->paginate(8);


        return view('asistente.inscripciones', compact('inscripciones'));
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
        $inscripcion = new Inscripcion();
        $inscripcion->numEntradas = $request->numEntradas;
        $inscripcion->estado = "recibida";
        $inscripcion->user_id = $request->user_id;
        $inscripcion->evento_id = $request->evento_id;

        $inscripcion->save();

        return redirect()->route('inscripciones.show', ['user_id' => Auth::user()->id]);
    }

    /**
     * Display all inscriptions.
     */
    public function index2()
    {

         $inscripciones= Inscripcion::with(['evento'])->paginate(8);

        return view('asistente.inscripciones', compact('inscripciones'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscripcion $inscripcion)
    {
        //
    }

    public function inscriptionsDelete(Request $request)
    {
        if ($request->has('eliminarInscripcion')) {
            // Obtener los IDs de las inscripciones seleccionadas
            $ids = $request->input('eliminarInscripcion');

            // Eliminar las inscripciones seleccionadas
            Inscripcion::destroy($ids);
        }

        // Recuperar el evento asociado para recargar la vista
        $eventoId = $request->input('evento_id'); // Asegúrate de enviar el ID del evento en el formulario
        $evento = Evento::find($eventoId);

        if (!$evento) {
            return redirect()->route('admin.events')->with('error', 'Evento no encontrado.');
        }

        // Recuperar las inscripciones actualizadas
        $inscripciones = $evento->inscripciones; // Asume una relación hasMany entre Evento e Inscripcion

        return redirect()->route('admin.eventInscriptions', ['id' => $eventoId])
        ->with('success', 'Inscripciones eliminadas correctamente.');
    }
}
