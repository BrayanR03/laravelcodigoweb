{{-- <style>
    .activo a{
        color:red;
        text-decoration:underline;
    }
</style> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <nav>  <ul>
        <li class="{{setActivo('home')}}"><a href="/">Home</a></li>
        <li class="{{setActivo('nosotros')}}"><a href="nosotros">Nosotros</a></li>
        <li class="{{setActivo('servicios')}}"><a href="{{route('servicios.index')}}">Servicios</a></li>
        <li class="{{setActivo('contacto')}}"><a href="contacto">Contacto</a></li>
        @guest

        <li><a href="{{route('login')}}">Login</a></li>       
                   
        @else
        <li><a class="dropdown-item" href="#"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">Cerrar Sesion
     </a></li>
     @endguest
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>    
        
    </ul>
    </nav>
    
</body>
</html>