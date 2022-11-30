<?php

namespace App\Http\Controllers;

use Agenda;
use Illuminate\Http\Request;
use App\Models\AgendaModel;
use App\Models\User;
use App\Models\ServiciosModel;
use App\Models\CentroModel;
Use App\Models\EmpleadosModel;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $agenda = AgendaModel::all();
        // $usuarios = User::all();
        // $servicios = ServiciosModel::all();
        // $centros = CentroModel::all();
        // $empleados = EmpleadosModel::all();
        // return view('agenda', compact('agenda', 'usuarios', 'servicios', 'centros', 'empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // //
        // $agenda = AgendaModel::all();
        // $usuarios = User::all();
        // $servicios = ServiciosModel::all();
        // $centros = CentroModel::all();
        // $empleados = EmpleadosModel::all();
        // // return view('agenda.index', compact('agenda', 'usuarios', 'servicios', 'centros', 'empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $agenda = new AgendaModel();
        // $agenda->fecha_agenda = $request->fecha_agenda;
        // $agenda->hora_agenda = $request->hora_agenda;
        // $agenda->id_usuario = $request->id_usuario;
        // $agenda->id_servicio = $request->id_servicio;
        // $agenda->save();

        // $usuarios = User::all();
        // $servicios = ServiciosModel::all();
        // $agenda = AgendaModel::all();
        // $centros = CentroModel::all();
        // $empleados = EmpleadosModel::all();
        // return view('agenda', compact('agenda', 'usuarios', 'servicios', 'centros', 'empleados'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $agenda = AgendaModel::find($id);
        // $usuarios = User::all();
        // $servicios = ServiciosModel::all();
        // $centros = CentroModel::all();
        // $empleados = EmpleadosModel::all();
        // return view('agenda', compact('agenda', 'usuarios', 'servicios', 'centros', 'empleados'));
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
        $agenda = AgendaModel::find($id);
        $usuarios = User::all();
        $servicios = ServiciosModel::all();
        $centros = CentroModel::all();
        $empleados = EmpleadosModel::all();
        return view('agenda', compact('agenda', 'usuarios', 'servicios', 'centros', 'empleados'));
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
        $agenda = AgendaModel::find($id);
        $agenda->fecha_agenda = $request->fecha_agenda;
        $agenda->hora_agenda = $request->hora_agenda;
        $agenda->id_usuario = $request->id_usuario;
        $agenda->id_servicio = $request->id_servicio;
        $agenda->save();

        $usuarios = User::all();
        $servicios = ServiciosModel::all();
        $agenda = AgendaModel::all();
        $centros = CentroModel::all();
        $empleados = EmpleadosModel::all();
        return view('agenda', compact('agenda', 'usuarios', 'servicios', 'centros', 'empleados'));
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
        $agenda = AgendaModel::find($id);
        $agenda->delete();

        $usuarios = User::all();
        $servicios = ServiciosModel::all();
        $agenda = AgendaModel::all();
        $centros = CentroModel::all();
        $empleados = EmpleadosModel::all();
        return view('agenda', compact('agenda', 'usuarios', 'servicios', 'centros', 'empleados'));
    }
}
