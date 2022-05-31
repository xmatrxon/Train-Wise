<?php
/* Smarty version 4.1.0, created on 2022-05-31 09:31:43
  from 'C:\xampp\htdocs\trainwise\app\views\PersonEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6295c45f07be82_18079912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5d4bb142113209d1c2526f4c82316ceef4f63bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\PersonEdit.tpl',
      1 => 1653981639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6295c45f07be82_18079912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11211601106295c45f06fa83_53930613', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_11211601106295c45f06fa83_53930613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_11211601106295c45f06fa83_53930613',
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
    <input type="text" class="form-control" id="pass" name="pass" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass;?>
">
  </div>
  <button type="submit" class="btn btn-primary">Zapisz</button>
  <a class="btn btn-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personList">Powrót</a>
  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>
</div>
<?php
}
}
/* {/block 'main'} */
}
