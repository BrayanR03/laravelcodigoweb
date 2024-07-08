@extends('layout')
@section('title','contacto')
@section('content')
<h2>Contacto</h2>

<form action="{{route('contactos.store')}}" method="post">
@csrf

<table>
    <tr>
        <th><label >Nombre</label></th><td><input type="text" name="nombre" value="{{old('nombre')}}"></td><td>{{$errors->first('nombre')}}</td>
    </tr>
    <tr>
        <th><label >Email</label></th><td><input type="text" name="email" value="{{old('email')}}"></td><td>{{$errors->first('email')}}</td>
    </tr>
    <tr>
        <th><label >Asunto</label></th><td><input type="text" name="asunto" value="{{old('asunto')}}"></td><td>{{$errors->first('aunto')}}</td>
    </tr>
    <tr>
        <th><label >Mensaje</label></th><td><textarea name="mensaje" id="mensaje" cols="30" rows="10" value="{{old('mensaje')}}"></textarea></td><td>{{$errors->first('mensaje')}}</td>
    </tr>
    <tr>
        <td><button type="submit">Enviar</button></td>
    </tr>
    <tr>
        <td><button type="reset">Cancelar</button></td>
    </tr>
</table>
</form>


@endsection