<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/"> Politeknik Negeri Bengkalis D-IV ksi</a>
            
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
                <h4 class="text-secondary"> selamat datang alfi  {{ Auth::user()->name }}</h4>
            </div>
            <div class="col">
              <ul class="nav">  
                <li><a  href="#" >Home</a></li>
                <li><a href="{{ route('profile') }}">profile lulusan</a></li> 
                <li><a href="{{ route('auth.profiledosen') }}">Profile Dosen</a></li>
                <li><a href="{{ route('user.berita') }}">berita ksi</a></li> 
              </ul>
            </div>
            <div class="col-1">
                <a href="{{ route('logout') }}" style="text-decoration: none">
                <p class="text-end text-black fw-semibold"> logout</p></a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>