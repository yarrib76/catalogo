<div class="form-group">
    {!! Form::label('menu', 'Menu:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        @if(isset($menu))
            {!! Form::input('menu', 'menu', $menu->titulo, ['id' => 'titulo', 'class' => 'form-control nombre', 'name' => 'titulo',
            'placeholder' => 'Nombre del menu'])  !!}
        @else
            {!! Form::input('menu', 'menu', null, ['id' => 'menu', 'class' => 'form-control nombre', 'name' => 'menu',
            'placeholder' => 'Nombre del menu'])  !!}
        @endif
    </div>
</div>

