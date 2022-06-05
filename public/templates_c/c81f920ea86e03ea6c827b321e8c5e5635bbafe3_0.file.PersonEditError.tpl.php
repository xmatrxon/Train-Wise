<?php
/* Smarty version 4.1.0, created on 2022-06-05 20:30:03
  from 'C:\xampp\htdocs\trainwise\app\views\PersonEditError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629cf62bcdc146_08411025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c81f920ea86e03ea6c827b321e8c5e5635bbafe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\PersonEditError.tpl',
      1 => 1654453576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629cf62bcdc146_08411025 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
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
</form><?php }
}
