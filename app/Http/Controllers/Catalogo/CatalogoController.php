<?php namespace Catalogos\Http\Controllers\Catalogo;

use Catalogos\Http\Requests;
use Catalogos\Http\Controllers\Controller;

use Catalogos\Models\Catalogos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CatalogoController extends Controller {

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
            $catalogos = Catalogos::where('cliente_id', $cliente->id)->get();
            return view('catalogos.reporte', compact('catalogos','cliente'));
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
        $cliente_id = Input::get('cliente_id');
        return view ('catalogos.nuevo', compact('cliente_id'));

    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        Catalogos::create([
            'nombre' => Input::get('catalogo'),
            'cliente_id' => Input::get('cliente_id'),
        ]);
        return redirect()->route('catalogos.index');
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
		$catalogo = Catalogos::find($id);
        $catalogo->delete();
        return redirect()->route('catalogos.index');
    }

}
