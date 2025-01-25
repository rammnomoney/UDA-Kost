<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="/aset/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">
        <title>ADMIN</title>

        <link href="favicon.ico" rel="icon">

        <link rel="stylesheet" href="/css/admin/admin.css">
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" /> 

        <!-- icon bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

        <link type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" />

{{-- CSS --}}
{{-- <style>
    :root {
        --Default: #f9f9f9;
        --white: #fff;
        --black: #000;
        --primary: #417bbf;
        --secondary: #191C24;
        --gray: #6C7293;
        --light: #ced4da;
        --dark: #000000;
    }
    body{
        overflow-y: scroll;
        background: #000;
    }
    
</style> --}}

</head>
    <body>
        @include('admins.layout.sidebar') 
        
        @yield('container')


        <script>
        // $(document).ready(function () {
        //         $('.sidebar-toggler').click(function (e) {
        //             e.preventDefault(); // Mencegah aksi default dari elemen `<a>`
        //             $('.sidebar, .content').toggleClass("open");
        //         });
        //     });
        $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
            return false;
        });
        </script>

        {{-- Laporan --}}
        <script>
            function hide() {
                var x = document.getElementById("hai");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>


            <script>
                $(document).ready(function () {
                $("#myTable").DataTable({
                    searching: false,
                    paging: false,
                    info: false,
                });
            });
            </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
