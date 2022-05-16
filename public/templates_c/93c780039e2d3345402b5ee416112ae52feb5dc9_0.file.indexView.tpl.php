<?php
/* Smarty version 4.1.0, created on 2022-05-16 20:04:58
  from 'C:\xampp\htdocs\trainwise\app\views\templates\indexView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6282924a6a7361_83810862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93c780039e2d3345402b5ee416112ae52feb5dc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\templates\\indexView.tpl',
      1 => 1652724288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6282924a6a7361_83810862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="author" content="Mateusz Będkowski">
		<meta name="description" content="Siłownia TrainWise">
		<title>TrainWise</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/be4ae855ef.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" />
	</head>
	<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="82">
		<nav id="navbar" class="navbar navbar-expand-lg position-fixed top-0 w-100 py-3">
			<div class="container">
				<a class="navbar-brand link" href="#"><i class="fa-solid fa-dumbbell"></i> <span class="color-text">trainwise</span></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i></button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ms-auto">
						<a class="nav-link active link" href="#home">Home</a>
						<a class="nav-link link" href="#aboutus">o siłowni</a>
						<a class="nav-link link" href="#prices">karnety</a>
						<a class="nav-link link" href="#achievements">osiągnięcia</a>
						<a class="nav-link link" href="#contact">kontakt</a>
<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="nav-link link login-btn">Wyloguj</a>
<?php } else { ?>	
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" class="nav-link link login-btn">Zaloguj</a>
<?php }?>
 
					</div>
				</div>
			</div>
		</nav>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20078488986282924a6a19a9_57223201', 'main');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6498913366282924a6a2d57_16633650', 'content');
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
		<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/slicksettings.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://unpkg.com/aos@2.3.1/dist/aos.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/aossettings.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/script.js"><?php echo '</script'; ?>
>
	</body>
</html>
<?php }
/* {block 'main'} */
class Block_20078488986282924a6a19a9_57223201 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_20078488986282924a6a19a9_57223201',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'main'} */
/* {block 'content'} */
class Block_6498913366282924a6a2d57_16633650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6498913366282924a6a2d57_16633650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}