<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<title>Latihan Bootstrap JWD 3!</title>
</head>
<body>

	<!-- Membuat navbar
	1. Copy navbar
	2. Ubah keterangan sesuai keinginan
	3. Ganti  navbar-light bg-light jadi navbar-dark bg-dark
	4. Tambahkan class fixed-top pada navbar -->

	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">Nurul Fatikah Muchlis</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
					<a class="nav-link" href="#portfolio">Portfolio</a>
					<a class="nav-link" href="#about">About</a>
					<a class="nav-link" href="#contact" tabindex="-1">Contact</a>
				</div>
			</div>
		</div>
	</nav>


	<!-- Membuat Jumbotron 
		1. Copy fluid jumbotron
		2. Ubah fluid jadi nama dan ubah keterangan sesuai yang diinginkan
		3. Tambahkan text-center d icontaineruntuk membuat teks align center
		4. tambahkan gambar dengan tag <img> dan sesuaikan ukuran dengan width
		5. Jika gambar berbentuk kotak, maka tambahkan class rounded-circle
	-->

	<div class="jumbotron jumbotron-fluid">
		<div class="container text-center">
			<img src="profile.png" width="200px">
			<h1 class="display-4">Nurul Fatikah Muchlis</h1>
			<p class="lead">Selamat Datang di Pelatihan SKKNI G4 Kelas JWD-3 di BPPTIK</p>
		</div>
	</div>

	<div class="container" id="portfolio">
		<div class="row">
			<div class="col text-center" style="padding-top: 50px">
				<h1>Portfolio</h1>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="card">
					<img src="instruktur.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="instruktur2.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<img src="instruktur3.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Membuat Layout untuk About 
	1. Buat div class container
	2. Buat class row untuk baris pertama (tulisan about)
	3. Kemudian tambahkan kolomnya dan dibuat text center biar tulisan about ke tengah
	4. Buat class row dan col kedua kemudian diisikan dengan paragraf
	5. Ulangi langkah keempat dibawah divnya
-->

<div class="container" id="about">
	<div class="row">
		<div class="col text-center" style="padding-top: 50px">
			<h1>About</h1>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>

		<div class="col">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</div>

<div class="container" id="contact">
	<div class="row">
		<div class="col text-center" style="padding-top: 50px">
			<h1>Contact</h1>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<form>
				<div class="form-group">
					<label for="exampleInputName1">Nama</label>
					<input type="nama" class="form-control" id="exampleInputName1">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Email</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Pesan</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
				<button type="submit" class="btn btn-primary">Kirim</button>
			</form>
		</div>
	</div>

	
	
</div>



</body>
</html>