<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@stack('title', 'UDA Kost!?')</title>
    <link rel="icon" href="/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">

    @stack('addon-script-head')
</head>
<body>
    
    <!-- Navbar -->
    @include('layouts/components/navbar')
    
    <!-- Content -->
    @yield('content')
    
    <!-- Footer -->
    @include('layouts/components/footer')
    
    @stack('addon-script-footer')
</body>
</html>