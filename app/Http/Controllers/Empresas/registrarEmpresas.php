<?php

namespace App\Http\Controllers\Empresas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\rempresas;
use App\Http\Requests\registrarcontactoempresa;
use DB;

class registrarEmpresas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $verEmpresas = DB::table('empresas')
        ->get();

        return view('Empresas-Empleados.empresas', compact('verEmpresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(rempresas $request)
    {
        DB::table('empresas')->insert([
            'nombre' => $request ->input('nombre_empresa'),
            'direccion_principal' => $request ->input('direccion_principal'),
            'telefono_principal' => $request ->input('telefono_principal'),
            'correo_principal' => $request ->input('correo_principal'),
        ]);
        return redirect()->route('registrarEmpresas.create')->with('Exito','Datos Guardados Correctamente');
    }

    public function store1(registrarcontactoempresa $request1)
    {
        DB::table('contacto_empresas')->insert([
            'nombre_contacto' => $request1 ->input('nombre'),
            'departamento' => $request1 ->input('departamento'),
            'correo' => $request1 ->input('correo'),
            'celular' => $request1 ->input('celular'),
            'telefono' => $request1 ->input('telefono'),
            'empresa' => $request1 ->input('empresa')
        ]);
        return redirect()->route('registrarEmpresas.create')->with('Exito1','Datos Guardados Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contactos = DB::table('contacto_empresas')
        ->where('id','id')
        ->first();

        return view('ver_contacto', compact('contactos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
