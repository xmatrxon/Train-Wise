<?php
/* Smarty version 4.1.0, created on 2022-05-23 20:40:18
  from 'C:\xampp\htdocs\trainwise\app\views\RegisterView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628bd512043495_85003198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d9e51704269816da0916991b3f75ed72971047d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\RegisterView.tpl',
      1 => 1653331087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628bd512043495_85003198 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113083985628bd512038886_63273144', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_113083985628bd512038886_63273144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_113083985628bd512038886_63273144',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="login bg-light py-5">
    <div class="container">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" method="post" class="loginForm">
        <div class="mb-3">
            <label for="imie" class="form-label">Imie: </label>
            <input type="text" class="form-control" id="imie" name="imie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->imie;?>
">
        </div>
        <div class="mb-3">
            <label for="nazwisko" class="form-label">Nazwisko: </label>
            <input type="text" class="form-control" id="nazwisko" name="nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwisko;?>
">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail: </label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->email;?>
">
        </div>
        <div class="mb-3">
            <label for="nrtel" class="form-label">Nr. telefonu: </label>
            <input type="text" class="form-control" id="nrtel" name="nrtel" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nrtel;?>
">
        </div>
        <div class="mb-3">
            <label for="pesel" class="form-label">PESEL: </label>
            <input type="text" class="form-control" id="pesel" name="pesel" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pesel;?>
">
        </div>
        <div class="mb-3">
            <label for="id_pass" class="form-label">Hasło: </label>
            <input type="password" class="form-control" id="id_pass" name="pass">
        </div>
        <button type="submit" value="zarejestruj" class="btn btn-primary">Zarejestruj</button>
         <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
        </form>
    </div>
</section>
<?php
}
}
/* {/block 'main'} */
}
