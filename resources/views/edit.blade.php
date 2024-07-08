@extends('layout')
@section('title','Editar')
@section('content')
@include('partials.validation-errors')
<form action="{{route('servicios.update',$servicios)}}" enctype="multipart/form-data" method="post">

@method('PATCH')

    <table>
        <tr>
            <td>
                    
                <img src="/storage/{{$servicios->image}}" alt="{{$servicios->titulo}}" width="300" height="100">
                  
            </td>
            <th>Editar Imagen</th>
        </tr>
    </table>

@include('partials.form',['btnText'=>'Actualizar'])
</form>
@endsection