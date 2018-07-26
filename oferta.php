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
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="Shortcut icon" href="img/favicon.ico" />
		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<title>Fabryka Okien</title>
	</head>

<body>

	<nav class="navbar navbar-light navbar-expand-lg">
		<div class="container prawo">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<img src="img/logo.png" alt="" />
			<div class="collapse navbar-collapse" id="navContent">
					<ul class="nav navbar-nav ml-auto mr-3">
				<li class="nav-item"> <a class="nav-link home" href="index.php">Start</a>
				</li>
				<li class="nav-item"> <a class="nav-link" href="sklep.php">Sklep</a>
				</li>
				<li class="nav-item active"> <a class="nav-link" href="oferta.php">Oferta</a>
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
	
	<div class="container border rounded">
	<header class="text-center" ><h1 class="mb-2 text-primary"> OKNA PCV </h1></header>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 border rounded mb-2">
					<p>Zapraszamy do zapoznania się z oferowanymi przez nas produktami. Nasze <b>okna PCV</b> pochodzą z naszych fabryk, co świadczy o ich najwyższej jakości. Jeżeli szukasz <b>okien PCV</b>, które będą służyły przez długie lata, zapoznaj się z naszymi propozycjami! Pamiętaj, że zawsze możesz liczyć na pomoc naszych handlowców. Wystarczy napisać lub zadzwonić.</p>
				</div>
				<div class="col-xs-12 col-sm-4 border rounded">
					<img class="img-fluid" src="img/indeks.jpg"> 
				</div>
				<div class="col-xs-12 col-sm-4 border rounded">
					<h1 class="text-uppercase page-label2 text-danger">Okno pojedyncze</h1>
					<p><b>Wymiary :</b><br /> Min - max. wysokość : 700 – 1800 mm <br />Min - max. szerokość : 400 – 2500 mm </p>
				</div>
				<div class="col-xs-12 col-sm-4 border rounded">
					 <h1 class="text-uppercase page-label2 text-danger">Okno pojedyncze</h1>
					<p>Stałe ( nieotwierane )<br />Uchylne<br />Rozwierane<br />Uchylne + rozwierane<br />Prawo lub lewo otwierane</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 border rounded">
					<img class="img-fluid" src="img/images.jpg"> 
				</div>
				<div class="col-xs-12 col-sm-4 border rounded">
					<h1 class="text-uppercase page-label2 text-danger">Okno podwójne pionowe</h1>
					<p><b>Wymiary :</b><br /> Min - max. wysokość : 700 – 1800 mm <br />Min - max. szerokość : 1100 – 2500 mm </p>
				</div>
				<div class="col-xs-12 col-sm-4 border rounded">
					 <h1 class="text-uppercase page-label2 text-danger">Okno podwójne pionowe</h1>
					<p>Stałe<br />Przesuwne<br />Rozwierane<br />Uchylne<br />Uchylne + rozwierane<br />Otwieranie środek</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 border rounded">
					<img class="img-fluid" src="img/indeks1.jpg"> 
				</div>
				<div class="col-xs-12 col-sm-4 border rounded">
					<h1 class="text-uppercase page-label2 text-danger">Okno podwójne poziome</h1>
					<p><b>Wymiary :</b><br /> Min - max. wysokość : 1300 – 2500 mm <br />Min - max. szerokość : 600 – 1500 mm </p>
				</div>
				<div class="col-xs-12 col-sm-4 border rounded">
					 <h1 class="text-uppercase page-label2 text-danger">Okno podwójne poziome</h1>
					<p>Przesuwne<br />Uchylne<br />Otwierane jedynie okno górne</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 border rounded">
					<img class="img-fluid" src="img/indeks2.jpg"> 
				</div>
				<div class="col-xs-12 col-sm-4 border rounded">
					<h1 class="text-uppercase page-label2 text-danger">Okno potrójne typ 1</h1>
					<p><b>Wymiary :</b><br /> Min - max. wysokość : 700 – 2000 mm <br />Min - max. szerokość : 1600 – 3000 mm </p>
				</div>
				<div class="col-xs-12 col-sm-4 border rounded">
					 <h1 class="text-uppercase page-label2 text-danger">Okno potrójne typ 1</h1>
					<p>Stałe okno środkowe<br />Przesuwne<br />Uchylne + rozwierane<br />Otwierane od środka</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-4 border rounded mb-2">
					<img class="img-fluid" src="img/images1.jpg"> 
				</div>
				<div class="col-xs-12 col-sm-4 border rounded mb-2">
					<h1 class="text-uppercase page-label2 text-danger">Okno potrójne typ 2</h1>
					<p><b>Wymiary :</b><br /> Min - max. wysokość : 1900 – 3000 mm <br />Min - max. szerokość : 1100 – 2200 mm </p>
				</div>
				<div class="col-xs-12 col-sm-4 border rounded mb-2">
					 <h1 class="text-uppercase page-label2 text-danger">Okno potrójne typ 2</h1>
					<p>Stałe okno górne<br />Uchylne + rozwierane<br />Otwierane od środka</p>
				</div>
				<div class="col-xs-12 col-sm-12 border rounded mb-2">
					<p>Oczywiście oferta nie kończy się na wyborze samych okien proszę pamiętać, również o innych aspektach jak wybór transportu, zdecydowanie w jaki sposób zostaną zamontowane wybrane przez Państwa zakupione elemnty oraz w jakis sposób zostaną opłacone. Oczywiście jesteśmy bardzo elastyczni i każdą ofertę tworzymy indywidualnie w 100% dopasowaną dla naszego klienta aby sprostać wymaganiom oraz oczekiwaniom, dlatego też zapraszamy do kontaktu z nami telefoniczie bądź mailowo, jeżeli również zależy Państwu na kontakcie osobistym z naszym przedstawicielem handlowym aby pomógł w wyborze i sfinaliowaniu wszystkich formalności również proszę zapytać o taką możliwość podczas rozmowy telefonicznej, jesteśmy otwarci na każdą ewentualność.</p>
				</div>
				<div class="col-xs-12 col-sm-12 border rounded mb-2 text-center">
					<h4><strong>Umożliwiamy zakupy okien PCV na raty!</strong></h4>
					<p>System ratalny realizowany jest przez</p>
					<img class="img-fluid" src="img/bank.jpg" alt="Okna na raty" style="max-width: 300px;"><br />
					<button class="btn btn-warning text-white top-button mb-2" type="submit" onclick="location.href = 'kontakt.php';">Skontaktuj się i poznaj ofertę</button>
				</div>
			</div>
		</div>	
	</div>
	
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