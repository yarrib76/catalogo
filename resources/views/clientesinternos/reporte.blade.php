@extends('layouts.master')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 ">
                <div class="panel panel-primary">
                    <div class="panel-heading"><i class="fa fa-cog">Clientes: </i></div>
                    <div class="panel-body">
                        <table id="reporte" class="table table-striped table-bordered records_list">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Sr</th>
                                <th>Dom.</th>
                                <th>Localidad</th>
                                <th>Provincia</th>
                                <th>Cond Venta</th>
                                <th>Cuit</th>
                                <th>Telefono</th>
                                <th>Transporte</th>
                                <th>Observaciones</th>
                                <th>Accion</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clientesInt as $clientesInt)
                                <tr>
                                    <td>{{$clientesInt['nombre']}}</td>
                                    <td>{{$clientesInt['sr']}}</td>
                                    <td>{{$clientesInt['domicilio']}}</td>
                                    <td>{{$clientesInt['localidad']}}</td>
                                    <td>{{$clientesInt['provincia']}}</td>
                                    <td>{{$clientesInt['cond_venta']}}</td>
                                    <td>{{$clientesInt['cuit']}}</td>
                                    <td>{{$clientesInt['telefono']}}</td>
                                    <td>{{$clientesInt['transporte']}}</td>
                                    <td>{{$clientesInt['observaciones']}}</td>
                                    <td>
                                        {!! HTML::linkRoute('clientesint.edit', ' Editar', $clientesInt['id'] , ['class' => 'btn btn-primary'] ) !!}
                                        {!! HTML::linkRoute('clientesint.destroy', ' Borrar', $clientesInt['id'] , ['class' => 'btn btn-danger', 'data-method' => 'DELETE','data-confirm' => '¿Seguro desea eliminar el Cliente ' . $clientesInt['nombre'] . '?', 'rel' => 'nofollow']) !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <table>
                            <tr>
                                <td>
                                    {!! HTML::linkRoute('clientesint.create', ' Crear Cliente', ['cliente_id' => $cliente->id], ['class' => 'btn btn-primary '] ) !!}
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
                            lengthMenu:    "Mostrar _MENU_ clientes",
                            info:           "Mostrando del  _START_ al _END_ de _TOTAL_ Clientes",
                            infoEmpty:      "0 clientes",
                            infoFiltered:   "(Filtrando _MAX_ clientes en total)",
                            infoPostFix:    "",
                            loadingRecords: "Chargement en cours...",
                            zeroRecords:    "No se encontraron clientes asignadas para esa busqueda",
                            emptyTable:     "No existen clientes ",
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