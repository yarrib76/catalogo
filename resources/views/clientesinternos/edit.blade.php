@extends('layouts.master')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-sm-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-cog">Editar Cliente: </i> {{{$clienteInt->nombre}}}</div>
                        <div class="panel-body">
                            @include('errors.basic')

                            {!! Form::model($clienteInt,[ 'route' => ['clientesint.update', $clienteInt->id], 'method' => 'PATCH','class' => 'form-horizontal', 'files' => true]) !!}
                            @include('clientesinternos.form')
                            <div class="col-sm-offset-3 col-sm-3">
                                <input type="hidden" name="cliente_id" value={{{$clienteInt->cliente_id}}}>
                                <button type="submit" class="btn btn-primary" name="modificar"><i class="fa fa-btn fa-plus"></i> Modificar</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
@stop
