<?php namespace Catalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model {
    protected $table = 'articulos';
    protected $fillable = ['cod_articulo','descripcion','submenu_id', 'image_name_1',
    'image_name_2', 'image_name_3','caracteristica_1','caracteristica_2','caracteristica_3',
    'orden'];

}
