<?php
/* Smarty version 4.1.0, created on 2022-06-05 20:50:47
  from 'C:\xampp\htdocs\trainwise\app\views\UserInfoView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629cfb072cc927_45786143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b113497915dc37d6682163af28348612727b04f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\UserInfoView.tpl',
      1 => 1654455041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cfb072cc927_45786143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159416060629cfb072af752_46271348', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1315710992629cfb072b0d81_03926841', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_159416060629cfb072af752_46271348 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_159416060629cfb072af752_46271348',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'main'} */
/* {block 'content'} */
class Block_1315710992629cfb072b0d81_03926841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1315710992629cfb072b0d81_03926841',
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
