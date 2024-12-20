<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="/aset/img/Udakost/transparent-udakost/Vertical-Uda Kost Logo.png">
        <title>ADMIN</title>

        <link href="favicon.ico" rel="icon">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <!-- MDB -->
        {{-- <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
            rel="stylesheet"/> --}}

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" /> 

        <!-- icon bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

        <link type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet" />

{{-- CSS --}}
<style>
    :root {
        --primary: #007bb6;
        --secondary: #191C24;
        --light: #6C7293;
        --dark: #000000;
    }
    body{
        overflow-y: scroll;
        background: #000;
    }
    p {
        color: #fff;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    h1, h2, h3, h4, h5, h6 {
        color: #fff;
    }
    /* Sidebar */
    .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    width: 250px !important;
    height: 100vh !important;
    overflow-y: auto;
    background: var(--secondary);
    transition: 0.5s;
    z-index: 999;
    }

    .content {
        margin-left: 250px;
        min-height: 100vh;
        background: var(--dark);
        transition: 0.5s;
    }

    @media (min-width: 992px) {
        .sidebar {
            margin-left: 0;
        }

        .sidebar.open {
            margin-left: -250px;
        }

        .content {
            width: calc(100% - 250px);
        }

        .content.open {
            width: 100%;
            margin-left: 0;
        }
    }

    @media (max-width: 991.98px) {
        .sidebar {
            margin-left: -250px;
        }

        .sidebar.open {
            margin-left: 0;
        }

        .content {
            width: 100%;
            margin-left: 0;
        }
    }


    /*** Navbar ***/
    .sidebar .navbar .navbar-nav .nav-link {
        padding: 7px 25px;
        color: var(--light);
        font-weight: 500;
        border-left: 3px solid var(--light);
        border-radius: 0 30px 30px 0;
        outline: none;
    }

    .sidebar .navbar .navbar-nav .nav-link:hover,
    .sidebar .navbar .navbar-nav .nav-link.active {
        color: var(--primary);
        background: var(--secondary);
        border-color: var(--primary);
    }

    .sidebar .navbar .navbar-nav .nav-link i {
        width: 30px;
        height: 35px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: var(--dark);
        border-radius: 40px;
    }

    .sidebar .navbar .navbar-nav .nav-link:hover i,
    .sidebar .navbar .navbar-nav .nav-link.active i {
        background: var(--secondary);
    }

    .sidebar .navbar .dropdown-toggle::after {
        position: absolute;
        top: 15px;
        right: 15px;
        border: none;
        content: "\f107";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        transition: .5s;
    }

    .sidebar .navbar .dropdown-toggle[aria-expanded=true]::after {
        transform: rotate(-180deg);
    }

    .sidebar .navbar .dropdown-item {
        padding-left: 25px;
        border-radius: 0 30px 30px 0;
        color: var(--light);
    }

    .sidebar .navbar .dropdown-item:hover,
    .sidebar .navbar .dropdown-item.active {
        background: var(--dark);
    }

    .content .navbar .navbar-nav .nav-link {
        margin-left: 25px;
        padding: 12px 0;
        color: var(--light);
        outline: none;
    }

    .content .navbar .navbar-nav .nav-link:hover,
    .content .navbar .navbar-nav .nav-link.active {
        color: var(--primary);
    }

    .content .navbar .sidebar-toggler,
    .content .navbar .navbar-nav .nav-link i {
        width: 30px;
        height: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: var(--dark);
        border-radius: 40px;
    }

    .content .navbar .dropdown-item {
        color: var(--light);
    }

    .content .navbar .dropdown-item:hover,
    .content .navbar .dropdown-item.active {
        background: var(--dark);
    }

    .content .navbar .dropdown-toggle::after {
        margin-left: 14px;
        vertical-align: middle;
        border: none;
        content: "\f107";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        transition: .5s;
    }

    .content .navbar .dropdown-toggle[aria-expanded=true]::after {
        transform: rotate(-180deg);
    }

    @media (max-width: 575.98px) {
        .content .navbar .navbar-nav .nav-link {
            margin-left: 15px;
        }
    }

/* -- BEFORE -- */
            /* @media (max-width: 991.98px) {
                .sidebar {
                    width: 100%;
                }
            }
            .sidebar .active {
                border-radius: 5px;
                box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%),
                    0 2px 10px 0 rgb(0 0 0 / 12%);
            } */

            /* .sidebar-sticky {
                position: relative;
                top: 0;
                height: calc(100vh - 48px);
                padding-top: 0.5rem;
                overflow-x: hidden;
                overflow-y: auto; /* Scrollable contents if viewport is shorter than content. 
            } */
/* -- -- */

    .container-home{
        margin-left: 2%;
        width: 80%;
    }
    .container-fluid {
        margin-left: 19%;
        width: 80%;
    }
    .btn-dashboard {
        width: 24%;
        height: 150px;
        font-weight: 100;
    }
    .background-icon {
        opacity: 0.1;
        font-size: 120px;
        display: inline-block;
        position: absolute;
    }
    .btn-dashboard p {
        margin-bottom: 0;
    }
    .p-text {
        font-size: 40px;
    }

    /* filter icon */
    #filterContainer {
        display: none;
    }
    .show-filter #filterContainer {
        display: flex;
    }

    /* laporan */
    .success-text {
        color: green;
    }

    .danger-text {
        color: red;
    }

    /* tabel */
    tr, td{
        color: #000
    }
    #myTable {
        border-collapse: collapse;
    }

    #myTable thead td {
        border: 1px solid #d8e3f4;
    }
    #myTable tbody tr td {
        border: 1px solid #d8e3f4;
    }

    .table-nomor {
        width: 5%;
        white-space: nowrap;
    }
    .table-action {
        width: 100px;
        white-space: nowrap;
    }
    #myTable_wrapper {
        padding: 0;
    }
</style>

</head>
    <body>
        @include('admins.layout.sidebar') 
        
        
        @yield('container')


        <script>
        $(document).ready(function () {
                $('.sidebar-toggler').click(function (e) {
                    e.preventDefault(); // Mencegah aksi default dari elemen `<a>`
                    $('.sidebar, .content').toggleClass("open");
                });
            });
        </script>

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

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function () {
                $("#myTable").DataTable({
                    searching: false,
                    paging: false,
                    info: false,
                });
            });
        </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- MDB -->
        {{-- <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
        ></script> --}}

    </body>
</html>
