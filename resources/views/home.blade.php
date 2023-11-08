<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Homepage</title>
</head>

<body>
    <header>
        <h2><a href="#" style="color: blue">Politeknik Negeri Bengkalis</a></h2> 
		    <ul class="nav">  
			    <li><a  href="#" >Home</a></li>
			    <li><a href="{{ route('profile') }}">profile lulusan</a></li> 
			    <li><a href="{{ route('auth.profiledosen') }}">Profile Dosen</a></li>
			    <li><a href="{{ route('beritaksi') }}">berita ksi</a></li> 
		    </ul>
	</header>
	
	<section class="box">  
		<video src="img/What is cyber security .mp4" autoplay muted loop></video>
		    <h1 class="text-Primary">Selamat Datang!</h1>
            <h4 class="text-Primary">Di Perpustakaan Politeknik Negeri Bengkalis</h4>
            <h6 class="mt-3"> Silahkan
            <a href="{{ route('auth.login') }}" style="text-decoration: none">masuk</a> atau <a href="{{ route('auth.register') }}" style="text-decoration: none">daftar</a> jika anda belum punya akun
            </h6> 
	</section>
    
    <div>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bund le.min.js"></script>
</body>

</html>