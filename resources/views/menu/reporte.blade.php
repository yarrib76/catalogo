@extends('layouts.master')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-cog">Menu Para Catalogo: </i> {{{$catalogo->nombre}}}</div>
                    <div class="panel-body">
                            <table id="reporte" class="table table-striped table-bordered records_list">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Creado</th>
                                    <th>Accion</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($menus as $menus)
                                    <tr>
                                        <td>{{$menus['titulo']}}</td>
                                        <td>{{$menus['created_at']}}</td>
                                        <td>
                                            {!! HTML::linkRoute('menus.edit', ' Editar', $menus['id'] , ['class' => 'btn btn-primary'] ) !!}
                                            {!! HTML::linkRoute('menus.destroy', ' Borrar', $menus['id'] , ['class' => 'btn btn-danger', 'data-method' => 'DELETE','data-confirm' => '¿Seguro desea eliminar la Actividad ' . $menus['nombre'] . '?', 'rel' => 'nofollow']) !!}
                                            {!! HTML::linkRoute('submenus.index', 'SubMenu', ['menus_id' => $menus['id']] , ['class' => 'btn btn-primary'] ) !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        <table>
                            <tr>
                                <td>
                                    {!! HTML::linkRoute('menus.create', ' Crear Menu', ['catalogo_id' => $catalogo->id] , ['class' => 'btn btn-primary '] ) !!}
                                </td>
                                <td>
                                    {!! HTML::linkRoute('catalogos.index', 'Volver a los catalogos', ['catalogo_id' => $catalogo->id] , ['class' => 'btn btn-success'] ) !!}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('extra-javascript')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/1.10.6/integration/font-awesome/dataTables.fontAwesome.css">

    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/1.10.6/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <!-- DataTables -->

    <script type="text/javascript">

        $(document).ready( function () {
            $('#reporte').DataTable({

                        "lengthMenu": [ [8,  16, 32, -1], [8, 16, 32, "Todos"] ],
                        "order": [[ 1, "asc" ]],
                        language: {
                            search: "Buscar:",
                            "thousands": ",",
                            processing:     "Traitement en cours...",
                            lengthMenu:    "Mostrar _MENU_ menus",
                            info:           "Mostrando del  _START_ al _END_ de _TOTAL_ menues",
                            infoEmpty:      "0 menues",
                            infoFiltered:   "(Filtrando _MAX_ menus en total)",
                            infoPostFix:    "",
                            loadingRecords: "Chargement en cours...",
                            zeroRecords:    "No se encontraron menus asignadas para esa busqueda",
                            emptyTable:     "No existen menus asignadas",
                            paginate: {
                                first:      "Primero",
                                previous:   "Anterior",
                                next:       "Proximo",
                                last:       "Ultimo"
                            }
                        }
                    }

            );
        } );
    </script>
@stop