<?php
/* Smarty version 4.1.0, created on 2022-06-04 19:56:15
  from 'C:\xampp\htdocs\trainwise\app\views\PersonList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b9cbf40fed3_13163483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a159c50713878e7ed773fbaf240582b2de797f7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\PersonList.tpl',
      1 => 1654365373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b9cbf40fed3_13163483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1881069447629b9cbf3dafe9_04259600', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_822584366629b9cbf3e0ae2_11232807', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_1881069447629b9cbf3dafe9_04259600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1881069447629b9cbf3dafe9_04259600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container mt-5">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList" class="searchForm">
<legend>Opcje wyszukiwania</legend>
  <div class="mb-3">
    <label for="nazwisko" class="form-label">Nazwisko</label>
    <input type="text" class="form-control" name="sf_nazwisko" id="nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->nazwisko;?>
">
  </div>
  <button type="submit" class="btn btn-primary">Filtruj</button>
</form>	
</div>
<?php
}
}
/* {/block 'main'} */
/* {block 'content'} */
class Block_822584366629b9cbf3e0ae2_11232807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_822584366629b9cbf3e0ae2_11232807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container mt-5">
<table id="tab_people" class="table">
<thead>
	<tr>
		<th>IMIE</th>
		<th>NAZWISKO</th>
		<th>NR TEL</th>
		<th>PESEL</th>
		<th>KARNET</th>
		<th>OPCJE</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['klient']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
<tr><?php if ($_smarty_tpl->tpl_vars['p']->value["aktywny"] == 1) {?><td><?php echo $_smarty_tpl->tpl_vars['p']->value["imie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwisko"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["nr_tel"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["pesel"];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['p']->value["Nazwa_karnetu"] != '') {?>Nazwa: <?php echo $_smarty_tpl->tpl_vars['p']->value["Nazwa_karnetu"];?>
</br>Od: <?php echo $_smarty_tpl->tpl_vars['p']->value["Data_rozpoczecia"];?>
</br>Do: <?php echo $_smarty_tpl->tpl_vars['p']->value["Data_zakonczenia"];
} else { ?><p>Brak karnetu</p><?php }?></td><td><a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_klienta'];?>
">Edytuj</a>&nbsp;<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_klienta'];?>
">Deaktywacja</a></td><?php }?></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList" method="post">
<?php ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['operator']->value;
$_prefixVariable2 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable3 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['operator']->value;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable1 == '' && $_prefixVariable2 == 1 || $_prefixVariable3 == 0 && $_prefixVariable4 == 1) {?>
<a class="btn btn-secondary" href="">Poprzednia</a>
<a class="btn btn-secondary" href="">Następna</a>
<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable6 = ob_get_clean();
if ($_prefixVariable5 == '' || $_prefixVariable6 == 0) {?>
<a class="btn btn-secondary" href="">Poprzednia</a>
<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Następna</a>
<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable7 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable8 = ob_get_clean();
if ($_prefixVariable7 == $_prefixVariable8) {?>
<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Poprzednia</a>
<a class="btn btn-secondary" href="">Następna</a>
<?php } else { ?>
<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Poprzednia</a>
<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Następna</a>
<?php }}}?>
</form>
</div>
<?php
}
}
/* {/block 'content'} */
}
