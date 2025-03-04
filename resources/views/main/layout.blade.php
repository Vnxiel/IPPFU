<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title</title>
        <style>
            .montserrat{
            font-family: "Montserrat", sans-serif;
            font-optical-sizing: auto;
            /* font-weight: <weight>; */
            font-style: normal; 
            }

            body {
            overflow-x: hidden;
            }

        </style>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link rel="icon" type="image/x-icon" href="{{ asset('img/temp_logo.png') }}">

        <!-- DataTables CSS -->
        <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Optional: Bootstrap 5 DataTables integration -->
        <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    </head>
    <body style="background-color: #F8F2DE;" class="montserrat">
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Thirteenth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                    <a href="{{ route('main.index') }}" class="navbar-brand col-lg-3 me-0 d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                        <img src="{{ asset('img/temp_logo.png') }}" alt="Logo" width="50" height="40" class="img-fluid d-inline-block align-text-top me-2">
                        <div>
                            <h5 class="mb-0">Provincial Engineering Office</h5>
                            <h6 class="mt-0">Province of Nueva Vizcaya</h6>
                        </div>
                    </a>

                    <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('main.index') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.projects') }}">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('main.funds') }}">Funds</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Settings</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('main.userRoles') }}">User Roles</a></li>
                            <li><a class="dropdown-item" href="{{ route('main.activityLogs') }}">Activity Logs</a></li>
                        </ul>
                        </li>
                    </ul>
                    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                        <div class="dropdown">
                            <a href="#" id="dropdownMenuButton" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" 
                            data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                <span class="fa fa-user me-1"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end text-small" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="/">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Content -->
        @yield('content')


        <!-- Footer -->
        <div class="container-fluid">
            <footer class="text-center p-2">
            <p>&copy; {{ date('Y') }} PEO. All Rights Reserved.</p>
            </footer>
        </div>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <!-- Optional: Bootstrap 5 DataTables integration JS -->
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>

        <!-- Bootstrap JS  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <!-- Your custom JS files -->
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ asset('js/data.js') }}"></script>

    </body>
</html>



