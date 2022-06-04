<?php
/* Smarty version 4.1.0, created on 2022-06-04 12:56:12
  from 'C:\xampp\htdocs\trainwise\app\views\PersonEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b3a4c60a310_35604110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5d4bb142113209d1c2526f4c82316ceef4f63bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\PersonEdit.tpl',
      1 => 1654340170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b3a4c60a310_35604110 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1819543032629b3a4c5f8d79_01721162', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_1819543032629b3a4c5f8d79_01721162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1819543032629b3a4c5f8d79_01721162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container p-5">

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personSave" method="post">
<legend>Dane osoby</legend>
  <div class="mb-3">
    <label for="imie" class="form-label">Imię: </label>
    <input type="text" class="form-control" id="imie" name="imie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->imie;?>
">
  </div>
  <div class="mb-3">
    <label for="nazwisko" class="form-label">Nazwisko: </label>
    <input type="text" class="form-control" id="nazwisko" name="nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwisko;?>
">
  </div>
  <div class="mb-3">
    <label for="nrtel" class="form-label">Numer telefonu: </label>
    <input type="text" class="form-control" id="nrtel" name="nrtel" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nrtel;?>
">
  </div>
  <div class="mb-3">
    <label for="login" class="form-label">Login: </label>
    <input type="text" class="form-control" id="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Hasło: </label>
    <input type="password" class="form-control" id="pass" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass;?>
">
  </div>
  <button type="submit" class="btn btn-primary">Zapisz</button>




<?php if ($_smarty_tpl->tpl_vars['rola']->value == "admin") {?>
<a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>
<?php } else { ?>
<a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userInfo">Powrót</a>
<?php }?>
  
  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>
</div>
<?php
}
}
/* {/block 'main'} */
}
