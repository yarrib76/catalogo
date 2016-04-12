<?php namespace Catalogos\Http\Controllers\Api;

use Catalogos\Http\Requests;
use Catalogos\Http\Controllers\Controller;

use Catalogos\Models\ClientesInternos;
use Catalogos\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;

class EnviarClientesController extends Controller {

    public function clientes(){
        $cliente_id = User::where('email', Input::get('email'))->get()[0]->
        load('miembrosDe')['miembrosDe'][0]->cliente_id;
        $clientesInternos = ClientesInternos::where('cliente_id', $cliente_id)->get();
        return Response::json($clientesInternos);
    }
}
