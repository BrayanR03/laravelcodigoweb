@extends('layout')
@section('title','Servicio |'.$servicios->titulo)
@section('content')
<ul>
    <li>{{$servicios->titulos}}</li>
    <li>{{$servicios->descripcion}}</li>
    <li>{{$servicios->created_at->diffForHumans()}}</li>
    
    <table>
        <tr>
            <td>
                <img src="/storage/{{$servicios->image}}" alt="{{$servicios->titulo}}" width="100" height="50">
            </td>
        </tr>
        <tr>
            <td><a href="{{route('servicios.edit',$servicios)}}">Editar</a></td>
            <td colspan="2">
                <form action="{{route('servicios.destroy',$servicios)}}" method="post">
                @csrf @method('DELETE')
                <button>Eliminar</button>
                </form>
            </td>
        </tr>
        <TR>
            <td><a href="{{route('servicios.index')}}">REGRESAR</a></td>
        </TR>
        
    </table>
</ul>

        
@endsection