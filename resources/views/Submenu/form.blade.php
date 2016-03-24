<div class="form-group">
    {!! Form::label('SubMenu', 'SubMenu:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        @if(isset($subMenus))
            {!! Form::input('SubMenu', 'SubMenu', $subMenus->titulo, ['id' => 'titulo', 'class' => 'form-control nombre', 'name' => 'titulo',
            'placeholder' => 'Nombre del Submenu'])  !!}
        @else
        {!! Form::input('SubMenu', 'SubMenu', null, ['id' => 'submenu', 'class' => 'form-control nombre', 'name' => 'submenu', 'placeholder' => 'Nombre del SubMenu'])  !!}
        @endif
    </div>
</div>

