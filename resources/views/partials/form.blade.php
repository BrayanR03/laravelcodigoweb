@csrf

<table>
    <tr>
        <th>Titulo</th>
        <td><input type="text" name="titulos" value="{{old('titulos',$servicios->titulos)}}"></td>
        {{-- <td><input type="text" name="titulos" id="{{$servicios->titulo}}"></td> --}}
    </tr>
    <tr>
        <th>Descripcion</th>
        <td><input type="text" name="descripcion" value="{{old('descripcion',$servicios->descripcion)}}"></td>
        
    </tr>
    <tr>
        <th>Seleccionar Archivo</th>
        <td><input type="file" name="image" ></td>
    </tr>
    
    <tr>
        <td><button>{{$btnText}}</button></td>
    </tr>
</table>