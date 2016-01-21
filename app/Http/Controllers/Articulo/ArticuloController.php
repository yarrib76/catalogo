<?php namespace Catalogos\Http\Controllers\Articulo;

use Carbon\Carbon;
use Catalogos\Http\Requests;
use Catalogos\Http\Controllers\Controller;

use Catalogos\Models\Articulos;
use Catalogos\Models\SubMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticuloController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $articulos = Articulos::where('submenu_id',Input::get('submenu_id'))->get();
        if (SubMenu::find(Input::get('submenu_id'))){
            $submenu = SubMenu::find(Input::get('submenu_id'));
            return view('articulos.reporte', compact('articulos','submenu'));
        }
        //Hay que cambiar por error desde HTML
        dd('No hay SubMenu');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $subMenu_id = Input::get('submenu_id');
        return view ('articulos.nuevo', compact('subMenu_id'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $imageName = Input::get('cod_articulo');
      //  dd(Input::file('image_path_1')->originalName);
        Input::file('image_path_1')->move(
            base_path() . '/articulos/fabrics/',
            $imageName . "1" . Carbon::now()->toDateTimeString() .  "." . Input::file('image_path_1')->getClientOriginalExtension());

        Input::file('image_path_2')->move(
            base_path() . '/articulos/fabrics/',
            $imageName . "2" . Carbon::now()->toDateTimeString() .  "."
            . Input::file('image_path_2')->getClientOriginalExtension());

        Input::file('image_path_3')->move(
            base_path() . '/articulos/fabrics/',
            $imageName .  "3" . Carbon::now()->toDateTimeString() .  "."
            . Input::file('image_path_3')->getClientOriginalExtension());

       // Articulos::create([
       //     'descripcion' => Input::get('descripcion'),
       //     'submenu_id' => Input::get('submenu_id'),
       // ]);
        return redirect()->route('articulos.index',['submenu_id' => Input::get('submenu_id')]);

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
        $articulos = Articulos::find($id);
        $subMenu_id = $articulos->submenu_id;
        $articulos->delete();
        return redirect()->route('articulos.index',['submenu_id' =>$subMenu_id]);

    }

}
