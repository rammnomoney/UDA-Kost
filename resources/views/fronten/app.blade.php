<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@stack('title', 'UDA Kost!?')</title>
    <link rel="icon" href="/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">

    <!-- Link CSS -->
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <link rel="stylesheet" href="/css/fronten.css">
    <link rel="stylesheet" href="/css/house.css">

    <!--  -->
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css' id='fontawesome' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">

    <!-- Script -->
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    
    <script src="/js/fronten.js"></script>
    {{-- <script src="/js/house.js"></script> --}}
</head>

<body>
<!-- Navbar -->
@include('layouts/components/navbar')

<!-- content -->
@yield('content')

<!-- Footer -->
@include('layouts/components/footer')

<script>
    // Kondisi untuk mengganti teks menjadi "BOOKING"
    const isBooked = true; // Ganti sesuai kondisi Anda

    document.addEventListener("DOMContentLoaded", function() {
        const rentButton = document.getElementById("rentButton");
        if (isBooked) {
            rentButton.textContent = "BOOKING";
        }
    });
</script>
</body>
</html>