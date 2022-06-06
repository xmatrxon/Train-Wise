<?php
/* Smarty version 4.1.0, created on 2022-06-06 11:17:47
  from 'C:\xampp\htdocs\trainwise\app\views\KarnetView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629dc63b0a5290_83946829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '067a68463df8b6f0fd39b4fb6a48eac1723901f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\KarnetView.tpl',
      1 => 1654507066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629dc63b0a5290_83946829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1673889883629dc63b09ea27_40167497', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1265683080629dc63b0a0733_98506578', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_1673889883629dc63b09ea27_40167497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1673889883629dc63b09ea27_40167497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'main'} */
/* {block 'content'} */
class Block_1265683080629dc63b0a0733_98506578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1265683080629dc63b0a0733_98506578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<section id="prices" class="prices mt-5 bg-light">
				<div class="container">
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
karnet" method="post" class="searchForm">
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
								<button type="submit" name="student" class="btn btn-secondary" value="student">zamawiam</button>
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
								<button type="submit" name="normalny" class="btn btn-success" value="normalny">zamawiam</button>
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
								<button type="submit" name="premium" class="btn btn-secondary" value="premium">zamawiam</button>
							</div>
						</div>
					</div>
					<div class="text-center">
						<p class="price-info">Skorzystaj z jednego z trzech karnetów, lub <a href="#contact">skontaktuj się</a> z nami i ustal warunki indywidualnie</p>
						<p class="text-muted">Karnet <strong>PREMIUM</strong> zawiera wszystkie opcje z poprzednich przedziałów cenowych w najlepszej konfiguracji</p>
					</div>
				</div>
                </form>
			</section>
<?php
}
}
/* {/block 'content'} */
}
