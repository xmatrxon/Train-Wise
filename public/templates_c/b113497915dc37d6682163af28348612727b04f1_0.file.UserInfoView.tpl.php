<?php
/* Smarty version 4.1.0, created on 2022-06-04 13:22:16
  from 'C:\xampp\htdocs\trainwise\app\views\UserInfoView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b4068c0df05_90808108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b113497915dc37d6682163af28348612727b04f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\UserInfoView.tpl',
      1 => 1654341728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b4068c0df05_90808108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1532069113629b4068bf1184_78820638', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1991053820629b4068bf2737_94014710', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_1532069113629b4068bf1184_78820638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1532069113629b4068bf1184_78820638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'main'} */
/* {block 'content'} */
class Block_1991053820629b4068bf2737_94014710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1991053820629b4068bf2737_94014710',
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
} else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
karnet" class="nav-link link login-btn">Kup karnet</a><?php }?></td><td><a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_klienta'];?>
">Edytuj</a>&nbsp;</td><?php }?></tr>
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
