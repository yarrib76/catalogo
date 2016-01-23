<?php namespace Catalogos\Models;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model {
    protected $table = 'sub_menus';
    protected $fillable = ['titulo','menu_id'];

    public function articulo(){
        return $this->hasMany('Catalogos\Models\Articulos', 'submenu_id');
    }
}
