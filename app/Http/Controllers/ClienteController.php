<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;
use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cant_clientes  = Cliente::count();
        $clientes       = Cliente::all();

        return view('masters.clientes.index', compact('cant_clientes', 'clientes'));
        // return view('welcome', compact('datos', 'etiqueta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        //falta validacion

        $datosCliente = $request->except('_token', '_method');

        Cliente::insert($datosCliente);

        $cant_clientes  = Cliente::count();
        $clientes       = Cliente::all();

        return redirect()->route('clientes.index')->with('success', 'Cliente agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('masters.clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('masters.clientes.edit', compact('cliente'));
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
        $cliente = Cliente::find($id);
        $cliente->cli_razon     = $request->input('cli_razon');
        $cliente->cli_dir       = $request->input('cli_dir');
        $cliente->cli_telf1     = $request->input('cli_telf1');
        $cliente->cli_telf2     = $request->input('cli_telf2');
        $cliente->cli_telf3     = $request->input('cli_telf3');
        $cliente->cli_tipo      = $request->input('cli_tipo');
        $cliente->cli_activo    = $request->input('cli_activo');
        $cliente->cli_mail1     = $request->input('cli_mail1');
        $cliente->cli_mail2     = $request->input('cli_mail2');
        $cliente->update();

        // $cliente = Cliente::where('id', '=', $id)->first();

        // $cliente->update($request->all());

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect('/clientes')->with('eliminado','1');
    }
}
