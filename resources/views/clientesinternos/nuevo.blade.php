@extends('layouts.master')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-cog">Crear Cliente</i></div>
                        <div class="panel-body">
                            @include('errors.basic')

                            {!! Form::open(['class' => 'form-horizontal', 'route' => ['clientesint.store'], 'novalidate' => 'novalidate','files' => true]) !!}
                                @include('clientesinternos.form')
                            <div class="col-sm-offset-3 col-sm-3">
                                <input type="hidden" name="cliente_id" value="{{{$cliente_id}}}">
                                <button type="submit" class="btn btn-primary" name="agregar"><i class="fa fa-btn fa-plus"></i> Agregar</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
@stop
