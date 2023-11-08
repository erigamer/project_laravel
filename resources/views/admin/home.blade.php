<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Politeknik Negeri Bengkalis D-IV ksi</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mt-1">
                <li class="nav-item" >
                    <h5>
                        <a class="nav-link" aria-current="page" href="{{ route('admin.home') }}">Home</a>
                    </h5>
                </li>
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Input
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('berita.form') }}">input berita</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                <li class="nav-item" >
                    <h5>
                        <a class="nav-link" aria-current="page" href="{{ route('admin.berita') }}">berita</a>
                    </h5>
                </li>
                <li class="nav-item" >
                    <h5>
                        <a class="nav-link" aria-current="page" href="#">Peminjaman</a>
                    </h5>
                </li>
                <li class="nav-item" >
                    <h5>
                        <a class="nav-link" aria-current="page" href="{{ route('logout') }}">logout</a>
                    </h5>
                </li>
               
                
            </ul>
          </div>
        </div>
      </nav>

      href="{{ route('berita.form') }}"
                    
                </li>
               
               
                
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h4 class="text-secondary"> selamat datang gool {{ Auth::user()->name }}</h4>
                
            </div>
            <div class="col"></div>
            <div class="row mt-3">
                <nav class="navbar navbar-expand-lg">
                    <div class="collapse navbar-collapse" id="navbarNav">
                       
                    </div>
                </nav>
            </div>
            

            

            <div class="col-1">
               
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
