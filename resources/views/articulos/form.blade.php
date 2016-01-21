<div class="form-group">
    {!! Form::label('codigo_articulo', 'Codigo del Articulo:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::input('cod_articulo', 'cod_articulo', null, ['id' => 'cod_articulo', 'class' => 'form-control nombre', 'name' => 'cod_articulo', 'placeholder' => 'Codigo del Articulo'])  !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::input('descripcion', 'descripcion', null, ['id' => 'descripcion', 'class' => 'form-control nombre', 'name' => 'descripcion', 'placeholder' => 'Descripcion'])  !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('imagen', 'Primera Imagen:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
         {!! Form::file('image_name_1', null) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('imagen', 'Segunda Imagen:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::file('image_name_2', null) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('imagen', 'Tercera Imagen:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::file('image_name_3', null) !!}
    </div>
</div>


