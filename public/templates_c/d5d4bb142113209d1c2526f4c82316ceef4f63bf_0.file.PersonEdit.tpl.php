<?php
/* Smarty version 4.1.0, created on 2022-05-16 20:24:34
  from 'C:\xampp\htdocs\trainwise\app\views\PersonEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628296e2055f07_30789596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5d4bb142113209d1c2526f4c82316ceef4f63bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\PersonEdit.tpl',
      1 => 1652725472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628296e2055f07_30789596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_909612744628296e204c4f8_12422340', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_909612744628296e204c4f8_12422340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_909612744628296e204c4f8_12422340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container p-5">

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personSave" method="post">
<legend>Dane osoby</legend>
  <div class="mb-3">
    <label for="name" class="form-label">Imię: </label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->name;?>
">
  </div>
  <div class="mb-3">
    <label for="surname" class="form-label">Nazwisko: </label>
    <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->surname;?>
">
  </div>
  <div class="mb-3">
    <label for="birthdate" class="form-label">Data urodzenia: </label>
    <input type="text" class="form-control" id="birthdate" name="birthdate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->birthdate;?>
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
