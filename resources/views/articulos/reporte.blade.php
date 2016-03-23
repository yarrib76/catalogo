@extends('layouts.master')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-cog">Articulo Para Submenu: </i> {{{$submenu->titulo}}}</div>
                    <div class="panel-body">
                        <table id="reporte" class="table table-striped table-bordered records_list">
                            <thead>
                            <tr>
                                <th>Orden</th>
                                <th>Descripcion</th>
                                <th>1ra Caracteristica</th>
                                <th>2da Caracteristica</th>
                                <th>3ra Caracteristica</th>
                                <th>Imagen</th>
                                <th>Accion</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($articulos as $articulos)
                                <tr>
                                    <td>{{$articulos['orden']}}</td>
                                    <td>{{$articulos['descripcion']}}</td>
                                    <td>{{$articulos['caracteristica_1']}}</td>
                                    <td>{{$articulos['caracteristica_2']}}</td>
                                    <td>{{$articulos['caracteristica_3']}}</td>
                                    <td>
                                        @if(!empty($articulos['image_name_1']))
                                            <img src="/images/fabrics/{{{$articulos['image_name_1']}}}" alt="Sin Imagen" height="52" width="52">
                                        @endif
                                        @if(!empty($articulos['image_name_2']))
                                            <img src="/images/fabrics/{{{$articulos['image_name_2']}}}" alt="Sin Imagen" height="52" width="52">
                                        @endif
                                        @if(!empty($articulos['image_name_3']))
                                            <img src="/images/fabrics/{{{$articulos['image_name_3']}}}" alt="Sin Imagen" height="52" width="52">
                                        @endif
                                    </td>
                                    <td>
                                        {!! HTML::linkRoute('articulos.edit', ' Editar', $articulos['id'] , ['class' => 'btn btn-primary'] ) !!}
                                        {!! HTML::linkRoute('articulos.destroy', ' Borrar', $articulos['id'] , ['class' => 'btn btn-danger', 'data-method' => 'DELETE','data-confirm' => '¿Seguro desea eliminar la Actividad ' . $articulos['descripcion'] . '?', 'rel' => 'nofollow']) !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    {!! HTML::linkRoute('articulos.create', ' Crear Articulo', ['submenu_id' => $submenu->id] , ['class' => 'btn btn-primary '] ) !!}
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
                        "order": [[ 0, "asc" ]],
                        language: {
                            search: "Buscar:",
                            "thousands": ",",
                            processing:     "Traitement en cours...",
                            lengthMenu:    "Mostrar _MENU_ articulos",
                            info:           "Mostrando del  _START_ al _END_ de _TOTAL_ Articulos",
                            infoEmpty:      "0 articulos",
                            infoFiltered:   "(Filtrando _MAX_ articulos en total)",
                            infoPostFix:    "",
                            loadingRecords: "Chargement en cours...",
                            zeroRecords:    "No se encontraron articulos asignadas para esa busqueda",
                            emptyTable:     "No existen articulos asignadas",
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