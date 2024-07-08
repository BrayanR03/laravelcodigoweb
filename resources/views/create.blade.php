@extends('layout')
@section('title','Crear Servicio')
    @section('content')
        <h1>Formulario Servicio</h1>
        @include('partials.validation-errors')
        <form action="{{route('servicios.store')}}" method="post" enctype="multipart/form-data">
             @include('partials.form',['btnText'=>'Guardar'])
        </form>
@endsection