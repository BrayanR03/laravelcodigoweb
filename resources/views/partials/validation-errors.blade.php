@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $errors)
            <li>{{$errors}}</li>
        @endforeach
    </ul>
@endif