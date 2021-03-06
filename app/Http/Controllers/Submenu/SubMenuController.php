<?php namespace Catalogos\Http\Controllers\Submenu;

use Catalogos\Http\Requests;
use Catalogos\Http\Controllers\Controller;

use Catalogos\Models\Catalogos;
use Catalogos\Models\Menu;
use Catalogos\Models\SubMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SubMenuController extends Controller {

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
        $subMenus = SubMenu::where('menu_id',Input::get('menus_id'))->get();
        if (Menu::find(Input::get('menus_id'))){
            $menu = Menu::find(Input::get('menus_id'));
            $catalogo = Catalogos::find($menu->catalogo_id);
            return view('Submenu.reporte', compact('subMenus','menu','catalogo'));
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
        $menu_id = Input::get('menu_id');
        return view ('Submenu.nuevo', compact('menu_id'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        SubMenu::create([
            'titulo' => Input::get('submenu'),
            'menu_id' => Input::get('menu_id'),
        ]);
        return redirect()->route('submenus.index',['menus_id' => Input::get('menu_id')]);
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
        $subMenus = SubMenu::find($id);
        return view('Submenu.edit', compact('subMenus'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $subMenus = SubMenu::find($id);
        $subMenus->fill(\Request::input())->save();
        return redirect()->route('submenus.index',['menus_id' => Input::get('menu_id')]);

    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $subMenu = SubMenu::find($id);
        $menu_id = $subMenu->menu_id;
        $subMenu->delete();
        return redirect()->route('submenus.index',['menus_id' =>$menu_id]);
    }

}
