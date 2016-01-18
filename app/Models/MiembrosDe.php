<?php namespace Catalogos\Models;

use Illuminate\Database\Eloquent\Model;

class MiembrosDe extends Model {

    protected $table = 'miembros_des';
    protected $fillable = ['usuario_id','cliente_id'];

    public function clientes(){

        return $this->belongsTo('Catalogos\Models\Clientes', 'cliente_id');
    }

}
