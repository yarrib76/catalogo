@extends('layouts.master')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-cog">Editar Articulo</i></div>
                        <div class="panel-body">
                            @include('errors.basic')

                            {!! Form::model($articulo,[ 'route' => ['articulos.update', $articulo->id], 'method' => 'PATCH','class' => 'form-horizontal', 'files' => true]) !!}
                            @include('articulos.formedit')
                            <div class="col-sm-offset-3 col-sm-3">
                                <button type="submit" class="btn btn-primary" name="modificar"><i class="fa fa-btn fa-plus"></i> Modificar</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
@stop
