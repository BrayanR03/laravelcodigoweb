@extends('layout')
@section('title','home')
@section('content')
<h2>Home</h2>
<p class="parrafo-home">
    Prueba de CSS en laravel produccion
</p>
<table>
    <tr>
        <td>
            @auth
                {{auth()->user()->name}}
            @endauth
        </td>
    </tr>
</table>
@endsection