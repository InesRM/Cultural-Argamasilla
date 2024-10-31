<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\User;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Recuperamos las empresas a excepcion de admin y asistente
        $empresas = Empresa::where('nombre', '!=', 'admin')
            ->where('nombre', "!=", "asistente")->paginate(8);
        $totalCompanies = count($empresas);

        return view('admin.companies', compact('empresas', 'totalCompanies'));
    }

    public function companyNewForm()
    {
        return view('admin.companyNewForm');
    }

    public function storeCompany(Request $request)
    {
        $empresa = new Empresa();

        $empresa->nombre = $request->nombre;
        $empresa->direccion = $request->direccion;
        $empresa->telefono = $request->telefono;
        $empresa->email = $request->email;
        $empresa->web = $request->web;
        $empresa->informacionExtra = $request->informacionExtra;

        $empresa->save();

        return redirect(route('admin.companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function companyDelete($id)
    {
        //Antes de eliminar la empresa vamos a cambiar la empresa de sus trabajadores a "asistente". 
        //Los usuarios que pertenecian a una empresa pasan a ser asistentes sin rol de empresa.
        $trabajadores = User::where('empresa_id', $id)->get();
        foreach ($trabajadores as $trabajador) {
            $trabajador->empresa_id = 7;
            $trabajador->rol = 'asistente';
            $trabajador->save();
        }
        Empresa::destroy($id);

        return redirect(Route('admin.companies'));
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
    public function companyDetails($id)
    {
        $empresa = Empresa::where('id', intval($id))->first();

        return view('admin.companyDetails', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empresa $empresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresa $empresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $empresa)
    {
        //
    }
}
