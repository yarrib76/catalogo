<div class="form-group">
    {!! Form::label('orden', 'Orden:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::input('orden', 'orden', $articulo->orden, ['id' => 'orden', 'class' => 'form-control nombre', 'name' => 'orden', 'placeholder' => 'Orden'])  !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::input('descripcion', 'descripcion', $articulo->descripcion, ['id' => 'descripcion', 'class' => 'form-control nombre', 'name' => 'descripcion', 'placeholder' => 'Descripcion'])  !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('caracteristica_1', '1ra Caracteristica:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::input('caracteristica_1', 'caracteristica_1', $articulo->caracteristica_1, ['id' => 'caracteristica_1', 'class' => 'form-control nombre', 'name' => 'caracteristica_1', 'placeholder' => '1ra Caracteristica'])  !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('caracteristica_2', '2da Caracteristica:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::input('caracteristica_2', 'caracteristica_2', $articulo->caracteristica_2, ['id' => 'caracteristica_2', 'class' => 'form-control nombre', 'name' => 'caracteristica_2', 'placeholder' => '2da Caracteristica'])  !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('caracteristica_3', '3ra Caracteristica:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::input('caracteristica_3', 'caracteristica_3', $articulo->caracteristica_3, ['id' => 'caracteristica_3', 'class' => 'form-control nombre', 'name' => 'caracteristica_3', 'placeholder' => '3ra Caracteristica'])  !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('imagen', 'Primera Imagen:', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        <table>
            <tr>
                <td>
                    <input type="file" class="form-control" id="image_name_1" name="image_name_1"
                           onchange="PreviewImage1();">
                </td>
                <td>
                    @if(!empty($articulo->image_name_1))
                        <img style="display: inline;" id="uploadPreview1"
                             src="/images/fabrics/{{{$articulo->image_name_1}}}" alt="" height="52" width="52"/>
                            <input type="hidden" name="image_name_1" value={{{$articulo->image_name_1}}} >
                    @else
                        <img style="display: none;" id="uploadPreview1" src="#" alt="" height="52" width="52"/>
                    @endif
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
                    <input type="file" class="form-control" id="image_name_2" name="image_name_2"
                           onchange="PreviewImage2();">
                </td>
                <td>
                    @if(!empty($articulo->image_name_2))
                        <img style="display: inline;" id="uploadPreview2"
                             src="/images/fabrics/{{{$articulo->image_name_2}}}" alt="" height="52" width="52"/>
                             <input type="hidden" name="image_name_2" value={{{$articulo->image_name_2}}} >
                    @else
                        <img style="display: none;" id="uploadPreview2" src="#" alt="" height="52" width="52"/>
                    @endif
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
                    <input type="file" class="form-control" id="image_name_3" name="image_name_3"
                           onchange="PreviewImage3();">
                </td>
                <td>
                    @if(!empty($articulo->image_name_3))
                        <img style="display: inline;" id="uploadPreview3"
                             src="/images/fabrics/{{{$articulo->image_name_3}}}" alt="" height="52" width="52"/>
                            <input type="hidden" name="image_name_3" value={{{$articulo->image_name_3}}} >
                    @else
                        <img style="display: none;" id="uploadPreview3" src="#" alt="" height="52" width="52"/>
                    @endif
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



