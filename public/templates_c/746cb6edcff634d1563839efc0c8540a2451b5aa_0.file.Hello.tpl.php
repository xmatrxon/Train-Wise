<?php
/* Smarty version 4.1.0, created on 2022-06-04 12:01:48
  from 'C:\xampp\htdocs\trainwise\app\views\Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b2d8c10b0d5_96672121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '746cb6edcff634d1563839efc0c8540a2451b5aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\Hello.tpl',
      1 => 1654336907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b2d8c10b0d5_96672121 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1600883051629b2d8c108cc8_14946983', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_887928516629b2d8c10a340_22389650', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_1600883051629b2d8c108cc8_14946983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1600883051629b2d8c108cc8_14946983',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block 'main'} */
/* {block 'content'} */
class Block_887928516629b2d8c10a340_22389650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_887928516629b2d8c10a340_22389650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<section id="contact" class="contact py-5">
				<h2>kontakt</h2>
				<div class="underline"></div>
				<div class="container">
					<div class="row text-center contact-us">
						<div class="col-sm-6 col-lg-4 contact-item order-1">
							<h3>TrainWise Katowice</h3>
							<p>ul. Katowicka 0</p>
							<p>00-000 Katowice</p>
							<p>+48 123 456 789</p>
							<p>mail@mail.pl</p>
						</div>
						<div class="col-lg-4 order-0 contact-item order-lg-1">
							<h3>social media</h3>
							<div class="social-media">
								<a href="#"><i class="fab fa-facebook"></i></a
								><a href="#"><i class="fab fa-twitter"></i></a
								><a href="#"><i class="fab fa-linkedin-in"></i></a>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4 contact-item order-1">
							<h3>TrainWise Warszawa</h3>
							<p>ul. Warszawska 0</p>
							<p>00-000 Warszawa</p>
							<p>+44 123 456 789</p>
							<p>mail-warszawa@mail.pl</p>
						</div>
					</div>
				</div>
				<div class="content-shadow"></div>
			</section>
					</main>
		<footer class="bg-dark text-light py-4 text-center">
			<p class="mb-0">&copy; <span class="footer__year"></span> TrainWise</p>
		</footer>
<?php
}
}
/* {/block 'content'} */
}
