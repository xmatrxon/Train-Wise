<?php
/* Smarty version 4.1.0, created on 2022-06-06 11:45:14
  from 'C:\xampp\htdocs\trainwise\app\views\PersonList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629dccaac3afe6_10492784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a159c50713878e7ed773fbaf240582b2de797f7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\trainwise\\app\\views\\PersonList.tpl',
      1 => 1654508709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:PersonListTable.tpl' => 1,
  ),
),false)) {
function content_629dccaac3afe6_10492784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1621856251629dccaac31516_96143679', 'main');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52039283629dccaac37185_34607506', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "indexView.tpl");
}
/* {block 'main'} */
class Block_1621856251629dccaac31516_96143679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1621856251629dccaac31516_96143679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container mt-5">
<form id="search-form" class="searchForm" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
personListPart','table'); return false;">
<legend>Opcje wyszukiwania</legend>
  <div class="mb-3">
    <label for="nazwisko" class="form-label">Nazwisko</label>
    <input type="text" class="form-control" name="sf_nazwisko" id="nazwisko" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->nazwisko;?>
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
class Block_52039283629dccaac37185_34607506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_52039283629dccaac37185_34607506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container mt-5">
<div id="table">
<?php $_smarty_tpl->_subTemplateRender("file:PersonListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
</div>
<?php
}
}
/* {/block 'content'} */
}
