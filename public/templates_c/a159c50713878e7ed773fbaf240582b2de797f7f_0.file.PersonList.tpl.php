<?php
/* Smarty version 4.1.0, created on 2022-05-23 19:25:16
  from 'C:\xampp\htdocs\trainwise\app\views\PersonList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628bc37c9a5154_47407257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a159c50713878e7ed773fbaf240582b2de797f7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\PersonList.tpl',
      1 => 1653326714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628bc37c9a5154_47407257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_617105668628bc37c98e5d4_84317281', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1615505283628bc37c9944e3_17013759', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_617105668628bc37c98e5d4_84317281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_617105668628bc37c98e5d4_84317281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container mt-5">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList">
<legend>Opcje wyszukiwania</legend>
  <div class="mb-3">
    <label for="surname" class="form-label">Nazwisko</label>
    <input type="text" class="form-control" name="sf_surname" id="surname" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->surname;?>
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
class Block_1615505283628bc37c9944e3_17013759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1615505283628bc37c9944e3_17013759',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container mt-5">
<div>
<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personNew">+ Nowa osoba</a>
</div>	

<table id="tab_people" class="table">
<thead>
	<tr>
		<th>imię</th>
		<th>nazwisko</th>
		<th>data ur.</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['klient']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["imie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwisko"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["pesel"];?>
</td><td><a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_klienta'];?>
">Edytuj</a>&nbsp;<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDelete/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_klienta'];?>
">Usuń</a></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
</div>
<?php
}
}
/* {/block 'content'} */
}
