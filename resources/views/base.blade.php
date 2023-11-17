<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ __('Books module') }}</title>
    </head>
    <body>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if ($message = Session::get('success')) 
        <p style="color: green;">{{ $message }}</p>
    @endif
        @yield('content')
    </body>
</html>
