<?php namespace Catalogos\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
    protected $table = 'menus';
    protected $fillable = ['titulo','catalogo_id'];
}
