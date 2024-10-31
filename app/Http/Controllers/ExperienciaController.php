<?php

namespace App\Http\Controllers;

use App\Models\Experiencia;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ExperienciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {

        $experiencias = Experiencia::with(['empresa'])
            ->orderBy('fechaInicio', 'asc')
            ->get();
        foreach ($experiencias as $experiencia) {
            $experiencia->fechaInicio =  Carbon::parse($experiencia->fechaInicio)->locale('es')->format('d/m/Y');
        }


        return view('asistente.experiencias', compact('experiencias'));
    }

    public function indexAdmin()
    {
        $experiencias = Experiencia::with('empresa')->paginate(15);

        $totalExperiences = Experiencia::count();

        return view('admin.experiences', compact('experiencias', 'totalExperiences'));
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
    public function show(Experiencia $experiencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experiencia $experiencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experiencia $experiencia)
    {
        //
    }

    public function experienceNewForm()
    {
        $empresas = Empresa::all();
        return view('admin.experienceNewForm', compact('empresas'));
    }

    public function storeExperience(Request $request)
    {
        $experiencia = new Experiencia();

        $experiencia->nombre = $request->nombre;
        $experiencia->fechaInicio = $request->fechaInicio;
        $experiencia->fechaFin = $request->fechaFin;
        $experiencia->descripcionCorta = $request->descripcionCorta;
        $experiencia->descripcionLarga = $request->descripcionLarga;
        $experiencia->precio = $request->precio;
        $experiencia->imagen = $request->imagen;
        $experiencia->empresa_id = $request->empresa_id;

        $experiencia->save();


        return redirect(route('admin.experiences'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function experienceDelete($id)
    {
        Experiencia::destroy($id);

        return redirect(route('admin.experiences'));
    }
}
