<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pacientes = Paciente::paginate(2);
        //return $pacientes;
        return view('pacientes.index',compact("pacientes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePacienteRequest $request)
    {
        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->celular = $request->celular;
        $paciente->save();
        return redirect()->route('pacientes.index',$paciente);
    }
 
    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        //
        //$pacientes = Paciente::find();
        return view('pacientes.show',compact('paciente'));
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        //
        return view('pacientes.edit',compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        //
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->celular = $request->celular;
        $paciente->save();
        return redirect()->route('pacientes.index',$paciente);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        //
        $paciente->delete();
        return redirect()->route('pacientes.index');
        
    }
}
