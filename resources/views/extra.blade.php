<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra</title>
</head>
<body>
    @extends('layouts.master')
    @section('menu')
    @parent
    <p>Este contenido es añadido al menu principal</p>
    @endsection

    @section('content')

    <p>Este apartado aparecera en la seccion "content".</p>
    @endsection
</body>
</html>