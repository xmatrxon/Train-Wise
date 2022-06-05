<?php
/* Smarty version 4.1.0, created on 2022-06-05 21:15:54
  from 'C:\xampp\htdocs\trainwise\app\views\templates\indexView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629d00ea3c48f8_37065421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93c780039e2d3345402b5ee416112ae52feb5dc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\templates\\indexView.tpl',
      1 => 1654456552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629d00ea3c48f8_37065421 (Smarty_Internal_Template $_smarty_tpl) {
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
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
		<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/be4ae855ef.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" />
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/functions.js"><?php echo '</script'; ?>
>
	</head>
	<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="82">
		<nav id="navbar" class="navbar navbar-expand-lg position-fixed top-0 w-100 py-3 shadow-bg">
			<div class="container">
				<a class="navbar-brand link" href="#"><i class="fa-solid fa-dumbbell"></i> <span class="color-text">trainwise</span></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars"></i></button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav ms-auto">
						<a class="nav-link active link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
">Home</a>
						<a class="nav-link link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
#aboutus">o siłowni</a>
						<a class="nav-link link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
#prices">karnety</a>
						<a class="nav-link link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
#achievements">osiągnięcia</a>
						<a class="nav-link link" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
#contact">kontakt</a>
<?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userInfo" class="nav-link link login-btn">Profil</a>
<?php } elseif (($_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['role']->value}) == 'admin') {?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1797619468629d00ea3b0358_96639852', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1805454370629d00ea3b1991_16128058', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1043456500629d00ea3c0e76_58944800', 'content');
?>

		<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
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
class Block_1797619468629d00ea3b0358_96639852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1797619468629d00ea3b0358_96639852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'main'} */
/* {block 'messages'} */
class Block_1805454370629d00ea3b1991_16128058 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_1805454370629d00ea3b1991_16128058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
<div class="messages bottom-margin">
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
	<li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</div>
<?php }?>



<?php
}
}
/* {/block 'messages'} */
/* {block 'content'} */
class Block_1043456500629d00ea3c0e76_58944800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1043456500629d00ea3c0e76_58944800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
