<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>BS Laravel @yield('title')</title>
  </head>
  <body>
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column p-3 text-white bg-dark" style=" height: inherit; min-height: 100vh;">
            <a class="d-flex align-items-center text-white text-decoration-none" href="#">
                <span class="fw-bold fs-4 p-2">BelajarBS</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="court" class="nav-link text-white active"><i class="bi bi-bank2 me-2"></i>  HOME</a>
                </li>
                <li class="nav-item"></li>
                    <a href="court_type" class="nav-link text-white"><i class="bi bi-toggles2 me-2"></i> COURT TYPE</a>
                </li>
                <li class="nav-item"></li>
                    <a href="transaction" class="nav-link text-white"><i class="bi bi-ui-radios me-2"></i>  TRANSACTIONS</a>
                </li>
                <li class="nav-item"></li>
                    <a href="user" class="nav-link text-white"><i class="bi bi-ui-radios me-2"></i>  USERS</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a class="nav-item d-flex align-items-center text-decoration-none text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle me-2"></i><strong>Admin</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 bg-white">
            <div class="container-fluid">
                <div class="row p-3">
                    <h2 class="">Master Project @yield('content title')</h2>
                </div>
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"crossorigin="anonymous"></script>
  </body>
</html>
