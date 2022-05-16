{extends file="indexView.tpl"}

{block name=main}
		<header id="home">
			<div class="hero-img">
				<div class="hero-shadow"></div>
				<div class="hero-text">
					<h1 data-aos="fade-up" data-aos-delay="200">Siłownia <span class="color-text">trainwise</span></h1>
					<p data-aos="fade-up" data-aos-delay="400">Miejsce, w którym stworzysz formę życia</p>
					<a data-aos="fade-up" data-aos-delay="600" href="#aboutus" type="button" class="btn btn-outline-light">poznaj nas</a>
				</div>
				<a href="#aboutus"><i class="fa-solid fa-chevron-down bounce-top"></i></a>
			</div>
		</header>
		<main>
			<section id="aboutus" class="aboutus bg-light py-5">
				<div class="container">
					<h2>o siłowni</h2>
					<div class="underline"></div>
					<div class="row">
						<div class="col-sm-6 col-md-4 text-center aboutus-hover" data-aos="zoom-in" data-aos-delay="100">
							<p><i class="fa-solid fa-ruler-horizontal"></i></p>
							<p class="aboutus-card-title mb-1">4 000 m <sup>2</sup></p>
							<p class="aboutus-card-text">Nasze siłownie to aż 4 000 m <sup>2</sup></p>
						</div>
						<div class="col-sm-6 col-md-4 text-center aboutus-hover" data-aos="zoom-in" data-aos-delay="200">
							<p><i class="fa-solid fa-bucket"></i></p>
							<p class="aboutus-card-title mb-1">sauny</p>
							<p class="aboutus-card-text">Każda nasza siłownia posiada saunę</p>
						</div>
						<div class="col-sm-6 col-md-4 text-center aboutus-hover" data-aos="zoom-in" data-aos-delay="300">
							<p><i class="fa-solid fa-weight-hanging"></i></p>
							<p class="aboutus-card-title mb-1">najwyższej klasy sprzęt</p>
							<p class="aboutus-card-text">Posiadamy najwyższej klasy sprzęt do ćwiczeń</p>
						</div>
						<div class="col-sm-6 col-md-4 text-center aboutus-hover" data-aos="zoom-in" data-aos-delay="400">
							<p><i class="fa-solid fa-people-group"></i></p>
							<p class="aboutus-card-title mb-1">profesjonalna obsługa</p>
							<p class="aboutus-card-text">Posiadamy profesjonalną obsługę</p>
						</div>
						<div class="col-sm-6 col-md-4 text-center aboutus-hover" data-aos="zoom-in" data-aos-delay="500">
							<p><i class="fa-solid fa-glass-water"></i></p>
							<p class="aboutus-card-title mb-1">darmowa woda</p>
							<p class="aboutus-card-text">Nasi klienci mogą korzystać z darmowej wody pitnej</p>
						</div>
						<div class="col-sm-6 col-md-4 text-center aboutus-hover" data-aos="zoom-in" data-aos-delay="600">
							<p><i class="fa-solid fa-clock"></i></p>
							<p class="aboutus-card-title mb-1">24h/7</p>
							<p class="aboutus-card-text">Nasze siłownie są czynne całą dobę</p>
						</div>
					</div>
				</div>
			</section>
			<section id="prices" class="prices py-5 bg-light">
				<h2>karnety</h2>
				<div class="underline"></div>
				<div class="container">
					<div class="price-wrap row text-center justify-content-center">
						<div class="col-md-6 col-xl-4">
							<div class="price-box">
								<h3>student</h3>
								<hr />
								<p><span>Ilość użytkowników:</span><i class="fas fa-person"></i></p>
								<p><span>Ilość wejść:</span> Raz dziennie</p>
								<p><span>Czas pobytu:</span> Godzina</p>
								<p><span>Wstęp do sauny:</span> Tak</p>
								<p class="price-tag">119zł</p>
								<button class="btn btn-secondary">zamawiam</button>
							</div>
						</div>
						<div class="col-md-6 col-xl-4">
							<div class="price-box">
								<h3>normalny</h3>
								<hr />
								<p><span>Ilość użytkowników:</span><i class="fas fa-person"></i></i></p>
								<p><span>Ilość wejść:</span> Raz dziennie</p>
								<p><span>Czas pobytu:</span> Bez limitu</p>
								<p><span>Wstęp do sauny:</span> Tak</p>
								<p class="price-tag">159zł</p>
								<button class="btn btn-success">zamawiam</button>
							</div>
						</div>
						<div class="col-md-6 col-xl-4">
							<div class="price-box">
								<h3>premium</h3>
								<hr />
								<p><span>Ilość użytkowników:</span><i class="fas fa-children"></i></i></p>
								<p><span>Ilość wejść:</span> Nieograniczona</p>
								<p><span>Czas pobytu:</span> Bez limitu</p>
								<p><span>Wstęp do sauny:</span> Tak</p>
								<p class="price-tag">299zł</p>
								<button class="btn btn-secondary">zamawiam</button>
							</div>
						</div>
					</div>
					<div class="text-center">
						<p class="price-info">Skorzystaj z jednego z trzech karnetów, lub <a href="#contact">skontaktuj się</a> z nami i ustal warunki indywidualnie</p>
						<p class="text-muted">Karnet <strong>PREMIUM</strong> zawiera wszystkie opcje z poprzednich przedziałów cenowych w najlepszej konfiguracji</p>
					</div>
				</div>
			</section>
			<section id="achievements" class="achievements py-5">
				<h2>nasze osiągnięcia</h2>
				<div class="underline"></div>
				<div class="container">
					<div class="row text-center achievements-list">
						<div class="col-md-6 col-xl-3 achievement">
							<i class="fas fa-thumbs-up"></i>
							<p class="achievement-number">99%</p>
							<p class="achievement-text">zadowolonych klientów</p>
						</div>
						<div class="col-md-6 col-xl-3 achievement">
							<i class="fas fa-trophy"></i>
							<p class="achievement-number">12</p>
							<p class="achievement-text">wygranych zawodów</p>
						</div>
						<div class="col-md-6 col-xl-3 achievement">
							<i class="fas fa-user-friends"></i>
							<p class="achievement-number">100+</p>
							<p class="achievement-text">klientów</p>
						</div>
						<div class="col-md-6 col-xl-3 achievement">
							<i class="fas fa-building"></i>
							<p class="achievement-number">2</p>
							<p class="achievement-text">lokalizacje</p>
						</div>
					</div>
				</div>
			</section>
{/block}