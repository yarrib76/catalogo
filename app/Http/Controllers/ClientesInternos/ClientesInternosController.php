<?php namespace Catalogos\Http\Controllers\ClientesInternos;

use Catalogos\Http\Requests;
use Catalogos\Http\Controllers\Controller;

use Catalogos\Models\Clientes;
use Catalogos\Models\ClientesInternos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ClientesInternosController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $usuario = Auth::user();
        if (!$usuario->miembrosDe()->get()->isEmpty())
        {
            $cliente = $usuario->miembrosDe()->get()[0]->clientes()->
            get()[0];
            $clientesInt = ClientesInternos::where('cliente_id', $cliente->id)->get();
            return view('clientesinternos.reporte', compact('clientesInt','cliente'));
        }else {
            dd('vacio');
        }
        dd('Hola Mundo');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $cliente_id = Input::get('cliente_id');
        return view ('clientesinternos.nuevo', compact('cliente_id'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        ClientesInternos::create([
            'nombre' => Input::get('nombre'),
            'sr' => Input::get('sr'),
            'domicilio' =>Input::get('domicilio'),
            'localidad' =>Input::get('localidad'),
            'provincia' =>Input::get('provincia'),
            'cond_venta' =>Input::get('cond_venta'),
            'cuit' =>Input::get('cuit'),
            'telefono' =>Input::get('telefono'),
            'transporte' =>Input::get('transporte'),
            'observaciones' =>Input::get('observaciones'),
            'cliente_id' => Input::get('cliente_id'),
        ]);
        return redirect()->route('clientesint.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$clienteInt = ClientesInternos::find($id);
        return view('clientesinternos.edit', compact('clienteInt'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $clienteInt = ClientesInternos::find($id);
        $clienteInt->fill(\Request::input())->save();
        return redirect()->route('clientesint.index');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$clienteInt = ClientesInternos::find($id);
        $clienteInt->delete();
        return redirect()->route('clientesint.index');
    }

}
