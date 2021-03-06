<?php
/* Smarty version 4.1.0, created on 2022-06-06 12:30:20
  from 'C:\xampp\htdocs\trainwise\app\views\PersonListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629dd73ca11b70_97403872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf0a305ecdb8807acdd7aaabb7545d2050f17fd4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\PersonListTable.tpl',
      1 => 1654511419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629dd73ca11b70_97403872 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="tab_people" class="table">
<thead>
	<tr>
		<th>IMIE</th>
		<th>NAZWISKO</th>
		<th>NR TEL</th>
		<th>PESEL</th>
		<th>KARNET</th>
        <th>AKTYWNY</th>
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
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["imie"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["nazwisko"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["nr_tel"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["pesel"];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['p']->value["Nazwa_karnetu"] != '') {?>Nazwa: <?php echo $_smarty_tpl->tpl_vars['p']->value["Nazwa_karnetu"];?>
</br>Od: <?php echo $_smarty_tpl->tpl_vars['p']->value["Data_rozpoczecia"];?>
</br>Do: <?php echo $_smarty_tpl->tpl_vars['p']->value["Data_zakonczenia"];
} else { ?><p>Brak karnetu</p><?php }?></td><?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value["aktywny"];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 1) {?><td>TAK</td><?php } else { ?><td>NIE</td><?php }?><td><a class="btn btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personEdit/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_klienta'];?>
">Edytuj</a>&nbsp;<?php ob_start();
echo $_smarty_tpl->tpl_vars['p']->value["aktywny"];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 1) {?><a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personDeactive/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_klienta'];?>
">Deaktywacja</a><?php } else { ?><a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personActivate/<?php echo $_smarty_tpl->tpl_vars['p']->value['id_klienta'];?>
">Aktywacja</a><?php }?></td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList" method="post">
<?php ob_start();
echo $_smarty_tpl->tpl_vars['numberOfRecords']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 <= 5) {?>
<a class="btn btn-secondary" href="#">Poprzednia</a>
<a class="btn btn-secondary" href="#">Nast??pna</a>
<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable4 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable5 = ob_get_clean();
if ($_prefixVariable4 == '' || $_prefixVariable5 == 0) {?>
<a class="btn btn-secondary" href="">Poprzednia</a>
<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Nast??pna</a>
<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['lastPage']->value-1;
$_prefixVariable6 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['page']->value;
$_prefixVariable7 = ob_get_clean();
if ($_prefixVariable6 == $_prefixVariable7) {?>
<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Poprzednia</a>
<a class="btn btn-secondary" href="">Nast??pna</a>
<?php } else { ?>
<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Poprzednia</a>
<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
personList?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Nast??pna</a>
<?php }}}?>
</form><?php }
}
