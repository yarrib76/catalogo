<?php namespace Catalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model {
    protected $table = 'articulos';
    protected $fillable = ['descripcion','submenu_id'];

}
