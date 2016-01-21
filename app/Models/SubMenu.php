<?php namespace Catalogos\Models;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model {
    protected $table = 'sub_menus';
    protected $fillable = ['titulo','menu_id'];
}
