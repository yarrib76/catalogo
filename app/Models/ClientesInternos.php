<?php namespace Catalogos\Models;

use Illuminate\Database\Eloquent\Model;

class ClientesInternos extends Model {

    protected $table = 'clientes_internos';
    protected $fillable = ['nombre','sr', 'domicilio', 'localidad', 'provincia',
        'cond_venta', 'cuit', 'telefono', 'transporte', 'observaciones', 'cliente_id'];

    public function Clientes(){

        return $this->belongsTo('Catalogos\Models\Clientes', 'cliente_id');
    }

}
