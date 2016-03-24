@extends('layouts.master')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-cog">Editar Menu</i></div>
                        <div class="panel-body">
                            @include('errors.basic')

                            {!! Form::model($menu,[ 'route' => ['menus.update', $menu->id], 'method' => 'PATCH','class' => 'form-horizontal']) !!}
                                @include('menu.form')
                            <div class="col-sm-offset-3 col-sm-3">
                                <input type="hidden" name="catalogo_id" value="{{{$menu->catalogo_id}}}">
                                <button type="submit" class="btn btn-primary" name="modificar"><i ></i>Modificar</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
@stop
