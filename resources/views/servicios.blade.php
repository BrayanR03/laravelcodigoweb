@extends('layout')
@section('title','servicios')
@section('content')
<h2>Servicios</h2>
<ul>
    
@if ($servicios)
    @foreach ($servicios as $servicios)
       <li> @if ($servicios->image)
            <img src="/storage/{{$servicios->image}}" alt="{{$servicios->titulo}}" width="50" height="50">
        @endif
        </li>
        <li><a href="{{route('servicios.show',$servicios)}}">{{$servicios->descripcion}}</a></li>
    @endforeach
@else
    <li>No hay Datos</li>
@endif
    
</ul>
<table>
    <tr>
        <td><a href="{{route('servicios.create')}}">Nuevo Servicio</a></td>
    </tr>
</table>

@endsection