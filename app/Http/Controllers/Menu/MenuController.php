<?php namespace Catalogos\Http\Controllers\Menu;

use Catalogos\Http\Requests;
use Catalogos\Http\Controllers\Controller;

use Catalogos\Models\Catalogos;
use Catalogos\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MenuController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $menus = Menu::where('catalogo_id',Input::get('catalogo_id'))->get();
        if(Catalogos::find(Input::get('catalogo_id'))){
            $catalogo = Catalogos::find(Input::get('catalogo_id'));
            return view('menu.reporte', compact('menus','catalogo'));
        }
        $catalogo="";
        return view('menu.reporte', compact('menus','catalogo'));
        //Hay que cambiar por error desde HTML
        dd('No hay Menus para este catalogo');
        }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $catalogo_id = Input::get('catalogo_id');
        return view ('menu.nuevo', compact('catalogo_id'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        Menu::create([
            'titulo' => Input::get('menu'),
            'catalogo_id' => Input::get('catalogo_id'),
        ]);
        return redirect()->route('menus.index',['catalogo_id' => Input::get('catalogo_id')]);
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
		$menu = Menu::find($id);
        return view('menu.edit', compact('menu'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $menu = Menu::find($id);
        $menu->fill(\Request::input())->save();
        return redirect()->route('menus.index',['catalogo_id' => Input::get('catalogo_id')]);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$menus = Menu::find($id);
        $catalogo_id = $menus->catalogo_id;
        $menus->delete();
        return redirect()->route('menus.index',['catalogo_id' =>$catalogo_id]);
    }

}
