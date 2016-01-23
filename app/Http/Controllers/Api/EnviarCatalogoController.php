<?php namespace Catalogos\Http\Controllers\Api;

use Catalogos\Http\Requests;
use Catalogos\Http\Controllers\Controller;

use Catalogos\Models\Catalogos;
use Catalogos\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class EnviarCatalogoController extends Controller {

    public function catalogo(){
        $cliente_id = User::where('email', Input::get('email'))->get()[0]->
        load('miembrosDe')['miembrosDe'][0]->cliente_id;
        $catalogo = Catalogos::find(Input::get('catalogo_id'))->load('menu')['menu'];
        $catalogo = $this->preparoCatalogo($catalogo);
        return Response::json($catalogo);

    }

    public function preparoCatalogo($catalogos){
        $x = 0;
        $datos = [];
        foreach ($catalogos as $menu){
            $datos[$x] = ['menu' => $menu['titulo']] + ['subMenu' => $menu->load('subMenu')['subMenu']->load('articulo')];
            $x++;
        }
        return ($datos);
    }
}
