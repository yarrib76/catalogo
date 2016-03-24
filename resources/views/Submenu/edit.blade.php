@extends('layouts.master')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-cog">Editar Submenu</i></div>
                        <div class="panel-body">
                            @include('errors.basic')

                            {!! Form::model($subMenus,[ 'route' => ['submenus.update', $subMenus->id], 'method' => 'PATCH','class' => 'form-horizontal']) !!}
                                @include('Submenu.form')
                            <div class="col-sm-offset-3 col-sm-3">
                                <input type="hidden" name="menu_id" value="{{{$subMenus->menu_id}}}">
                                <button type="submit" class="btn btn-primary" name="modificar"><i ></i>Modificar</button>
                            </div>
                            {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
@stop
