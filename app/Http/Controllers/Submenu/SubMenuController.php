<?php namespace Catalogos\Http\Controllers\Submenu;

use Catalogos\Http\Requests;
use Catalogos\Http\Controllers\Controller;

use Catalogos\Models\Menu;
use Catalogos\Models\SubMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SubMenuController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $subMenus = SubMenu::where('menu_id',Input::get('menus_id'))->get();
        if (Menu::find(Input::get('menus_id'))){
            $nombreMenu = Menu::find(Input::get('menus_id'))->titulo;
            return view('submenu.reporte', compact('subMenus','nombreMenu'));
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
		//
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
