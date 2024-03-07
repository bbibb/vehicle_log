<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Bryan Bibb" />
    <title>Vehicle Log - Bryan Bibb</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark text-light bg-dark">
    <div class="container px-lg-5">
        <a class="navbar-brand" href="/index.php">Bryan Bibb</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vehicles</a>

                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light bg-dark" href="vehicles.php">Vehicle List</a>
                        <a class="dropdown-item text-light bg-dark" href="#">Search Vehicles</a>
                        <a class="dropdown-item text-light bg-dark" href="add_vehicle.php">Add a Vehicle</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fuel</a>

                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light bg-dark" href="fuel.php">Fuel Report</a>
                        <a class="dropdown-item text-light bg-dark" href="#">Search Fuel Usage</a>
                        <a class="dropdown-item text-light bg-dark" href="add_fuel.php">Enter Fuel Usage</a>
                    </div>

                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Maintenance</a>

                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light bg-dark" href="maintenance.php">Maintenance Report</a>
                        <a class="dropdown-item text-light bg-dark" href="maintenance_type.php">Maintenance Types</a>
                        <a class="dropdown-item text-light bg-dark" href="#">Search Maintenance</a>
                        <a class="dropdown-item text-light bg-dark" href="add_maintenance.php">Enter Maintenance Data</a>
                    </div>

                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>

                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light bg-dark" href="#">Admin Home</a>
                        <a class="dropdown-item text-light bg-dark" href="#">Users</a>
                        <a class="dropdown-item text-light bg-dark" href="#">View All Data</a>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</nav>
