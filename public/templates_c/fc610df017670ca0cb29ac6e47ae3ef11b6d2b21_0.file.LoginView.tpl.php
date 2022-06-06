<?php
/* Smarty version 4.1.0, created on 2022-06-06 11:14:13
  from 'C:\xampp\htdocs\trainwise\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629dc565da0ab1_13307868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc610df017670ca0cb29ac6e47ae3ef11b6d2b21' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\LoginView.tpl',
      1 => 1654506852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629dc565da0ab1_13307868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_754031553629dc565d9a491_32163308', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_754031553629dc565d9a491_32163308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_754031553629dc565d9a491_32163308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="login bg-light py-5">
    <div class="container">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" class="loginForm">
        <div class="mb-3">
            <label for="id_login" class="form-label">Login: </label>
            <input type="text" class="form-control" id="id_login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
        </div>
        <div class="mb-3">
            <label for="id_pass" class="form-label">Hasło: </label>
            <input type="password" class="form-control" id="id_pass" name="pass">
        </div>
        <button type="submit" value="zaloguj" class="btn btn-primary">Zaloguj</button>
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" class="btn btn-primary ms-5">Zarejestruj</a>
        </form>
    </div>
</section>
<?php
}
}
/* {/block 'main'} */
}
