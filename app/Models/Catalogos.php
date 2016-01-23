<?php namespace Catalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Catalogos extends Model {

    protected $table = 'catalogos';
    protected $fillable = ['nombre','cliente_id'];

    public function Clientes(){

        return $this->belongsTo('Catalogos\Models\Clientes', 'cliente_id');
    }

    public function menu(){

        return $this->hasMany('Catalogos\Models\Menu', 'catalogo_id');
    }
}
