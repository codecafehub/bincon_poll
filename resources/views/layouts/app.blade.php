<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bincon poll</title>
    @include('layouts.styles')
</head>
<body>
    <div class="wrapper">
        <div class="main-header">
            @include('layouts.navigation')
        </div>
        <div class="main-content">
            @include('layouts.sidebar')
            @yield('content')
        </div>
        @include('layouts.footer')
    </div>
    
</body>
</html>