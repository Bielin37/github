<?php

session_start();
	
if (isset($_SESSION['zalogowany']))
	{
		$logo = '<i class="fa fa-user-circle-o link_color3 return" onclick="location.href = &quot;panel.php&quot;;"></i>';
	}
else
	{
		$logo = '<i class="fa fa-user-circle-o link_color2 return" onclick="location.href = &quot;logo.php&quot;;"></i>';
	}

?>

<!DOCTYPE html>

<html>

<html lang="pl"> 

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="Shortcut icon" href="img/favicon.ico" />
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<title>Fabryka Okien</title>
	</head>

<body>

	<nav class="navbar navbar-light navbar-expand-lg">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<img src="img/logo.png" alt="" />
			<div class="collapse navbar-collapse" id="navContent">
			<ul class="nav navbar-nav ml-auto mr-3">
				<li class="nav-item active"> <a class="nav-link home" href="index.php">Start</a>
				</li>
				<li class="nav-item"> <a class="nav-link" href="sklep.php">Sklep</a>
				</li>
				<li class="nav-item"> <a class="nav-link" href="oferta.php">Oferta</a>
				</li>
				<li class="nav-item"> <a class="nav-link" href="portfolio.php">Portfolio</a>
				</li>
				 <li class="nav-item"> <a class="nav-link" href="kontakt.php">Kontakt</a>
				</li>
			</ul>
			</div>
				<span><?php echo $logo;?></span>
		</div>
	</nav>

	<div class="jumbotron jumbotron-fluid text-white text-center top">
		<div class="container">
			<h1 class="text-uppercase top-header">Okna <span class="text_nag">dla twojego domu</span><span class="text_nag2"> i biura</span></h1>
			<p class="top-text">Wybierz jakość i doświadczenie !</p>
			<button class="btn btn-warning text-white top-button" type="submit" onclick="location.href = 'oferta.php';">Więcej</button>
		</div>
	</div>
	
		<section>
		<div class="container text-center mb-4">
				<div class="row">
					<div class="col-md ">
						<h1 class="text-uppercase portfolio-titel text-center">Witam na stronie internetowej naszej firmy</h1>
						<img class="rounded img-fluid portfolio-img" src="img/okna-1.jpg" alt="">
						<article>Fabryka okien jest wiodącym producentem okien PCV na rynku polskim. Produkujemy okna PCV dla róznych projektów budowlanych. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptatem eveniet in sint a inventore dolor nulla dolorum repudiandae voluptas commodi minus porro aspernatur, itaque nemo vel quibusdam nobis reiciendis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptatem eveniet in sint a inventore dolor nulla dolorum repudiandae voluptas commodi minus porro aspernatur, itaque nemo vel quibusdam nobis reiciendis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptatem eveniet in sint a inventore dolor nulla dolorum repudiandae voluptas commodi minus porro aspernatur, itaque nemo vel quibusdam nobis reiciendis</article>
					</div>
				</div>
		</div>
	</section>
	
	<section>
		<div class="container text-center border rounded mb-4">
				<div class="row">
					<div class="col-md">
						<h1 class="text-uppercase portfolio-subheader">W naszej firmie zamówisz okna on-line</h1>
						<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptatem eveniet in sint a inventore dolor nulla dolorum repudiandae voluptas commodi minus porro aspernatur, itaque nemo vel quibusdam nobis reiciendis</p>
						
						<button class="btn btn-info portfolio-button mb-3" type="submit" onclick="location.href = 'sklep.php';">Przejdź do naszego sklepu</button>
					</div>
				</div>
		</div>
	</section>
	
	<section class="portfolio">
		<div class="portfolio-header">
			<h2 class="text-center text-uppercase">Nasze projekty</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md">
					<img class="rounded img-fluid portfolio-img" src="img/inwe_1.jpg" alt="Inwestycja 1">
					<span class="text-uppercase page-label text-danger">Inwestycja</span>
					<h3 class="text-uppercase portfolio-subheader">Biurowiec</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptatem eveniet in sint a inventore dolor nulla dolorum repudiandae voluptas commodi minus porro aspernatur, itaque nemo vel quibusdam nobis reiciendis</p>
					<button class="btn btn-warning portfolio-button" type="submit" onclick="location.href = 'portfolio.php';">Czytaj więcej</button>
				</div>
				<div class="col-md">
					<img class="rounded img-fluid portfolio-img" src="img/inwe_2.jpg" alt="Inwestycja 2">
					<span class="text-uppercase page-label text-danger">Inwestycja</span>
					<h3 class="text-uppercase portfolio-subheader">Osiedle mieszkaniowe</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda voluptatem eveniet in sint a inventore dolor nulla dolorum repudiandae voluptas commodi minus porro aspernatur, itaque nemo vel quibusdam nobis reiciendis</p>
					<button class="btn btn-warning portfolio-button" type="submit" onclick="location.href = 'portfolio.php';">Czytaj więcej</button>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="site-footer">
			<div class="container">
				<div class="row pt-3 pb-3">
					<div class="col-xs-12 col-sm-3">
						<p class="footer-color text-uppercase">Nawigacja</p>
							<ul class="nav navbar-nav ml-auto">
								<li class="nav-item"> <a class="nav-link navi-color" href="index.php"><span><i class="fa fa-caret-right"></i></span> Start </a>
								</li>
								<li class="nav-item"> <a class="nav-link navi-color" href="sklep.php"><span><i class="fa fa-caret-right"></i></span> Sklep </a>
								</li>
								<li class="nav-item"> <a class="nav-link navi-color" href="oferta.php"><span><i class="fa fa-caret-right"></i></span> Oferta </a>
								</li>
								<li class="nav-item"> <a class="nav-link navi-color" href="portfolio.php"><span><i class="fa fa-caret-right"></i></span> Portfolio </a>
								</li>
								 <li class="nav-item"> <a class="nav-link navi-color" href="kontakt.php"><span><i class="fa fa-caret-right"></i></span> Kontakt</a>
								</li>
							</ul>
					</div>
					<div class="col-xs-12 col-sm-3">
						<p class="footer-color text-uppercase">Linki</p>
							<ul class="nav navbar-nav ml-auto">
								<li class="nav-item"> <a class="nav-link navi-color" target="_blank" href="index.php"><span><i class="fa fa-caret-right"></i></span> Facebook</a>
								</li>
								<li class="nav-item"> <a class="nav-link navi-color" target="_blank" href="index.php"><span><i class="fa fa-caret-right"></i></span> Blog</a>
								</li>
								
							</ul>
					</div>
					
					<div class="col-xs-12 col-sm-6">
						<p class="footer-color text-uppercase">Dziękujemy za zaufanie</p>
						<p>W razie pytań prosimy o kontakt z naszymi konsultantami:</p>
						<p><span><i class="fa fa-phone"></i></span> Adrian Bieliński telefon: 111-111-111</p>
						<p><span><i class="fa fa-phone"></i></span> Maciej Wolniak telefon: 222-222-222</p>
						<p><span><i class="fa fa-phone"></i></span> Patryk Sęk telefon: 333-333-333</p>
					</div>
							
				</div>
		</div>
	</footer>
	
	<section class="text-center text-black copyright color_cop py-3">
		<div class="container">
			<span> © 2018 Copyright: <a href="http://fourbytes.e-kei.pl/pzsi/">Fabryka Okien</a></span>
		</div>
	</section>

</body>
</html>