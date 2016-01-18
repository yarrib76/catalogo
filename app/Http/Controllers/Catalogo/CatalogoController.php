<?php namespace Catalogos\Http\Controllers\Catalogo;

use Catalogos\Http\Requests;
use Catalogos\Http\Controllers\Controller;

use Catalogos\Models\Catalogos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogoController extends Controller {

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
            $catalogos = Catalogos::where('cliente_id', $cliente->id)->get();
            return view('catalogos.reporte', compact('catalogos'));
        }else {
            dd('vacio');
        }

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        Catalogos::create([
        'title' => Input::get('title'),
        'cliente_id' => Input::get('cliente_id'),
        //  'url' => Input::get('url')
    ]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
