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
        <table>
            <tr>
                <td>
                    <input type="file" class="form-control" id="image_name_1" name="image_name_1" onchange="PreviewImage1();">
                </td>
                <td>
                    <img style="display: none;" id="uploadPreview1" src="#" alt="" height="52" width="52"/>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="form-group">
    {!! Form::label('imagen', 'Segunda Imagen:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        <table>
            <tr>
                <td>
                    <input type="file" class="form-control" id="image_name_2" name="image_name_2" onchange="PreviewImage2();">
                </td>
                <td>
                    <img style="display: none;" id="uploadPreview2" src="#" alt="" height="52" width="52"/>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="form-group">
    {!! Form::label('imagen', 'Tercera Imagen:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        <table>
            <tr>
                <td>
                    <input type="file" class="form-control" id="image_name_3" name="image_name_3" onchange="PreviewImage3();">
                </td>
                <td>
                    <img style="display: none;" id="uploadPreview3" src="#" alt="" height="52" width="52"/>
                </td>
            </tr>
        </table>
    </div>
</div>

@section('extra-javascript')
    <script type="text/javascript">
        function PreviewImage1() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("image_name_1").files[0]);
            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview1").src = oFREvent.target.result;
                document.getElementById("uploadPreview1").style.display = "inline";
            };
        };

        function PreviewImage2() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("image_name_2").files[0]);
            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview2").src = oFREvent.target.result;
                document.getElementById("uploadPreview2").style.display = "inline";

            };
        };
        function PreviewImage3() {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(document.getElementById("image_name_3").files[0]);
            oFReader.onload = function (oFREvent) {
                document.getElementById("uploadPreview3").src = oFREvent.target.result;
                document.getElementById("uploadPreview3").style.display = "inline";

            };
        };
    </script>
@stop



