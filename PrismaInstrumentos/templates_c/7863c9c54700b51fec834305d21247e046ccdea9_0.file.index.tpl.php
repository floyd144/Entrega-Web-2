<?php
/* Smarty version 3.1.30, created on 2016-10-22 05:44:36
  from "C:\xampp\htdocs\Entrega-Web-2\Web2-Prisma Instrumentos\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580ae0a415d7d3_01785262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7863c9c54700b51fec834305d21247e046ccdea9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Entrega-Web-2\\Web2-Prisma Instrumentos\\templates\\index.tpl',
      1 => 1477107269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:contacto.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_580ae0a415d7d3_01785262 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
      <div class="publi">
        <img src="images/banner.jpg" alt="publicidad" class="col-md-2" />
      </div>
      <div id="llamada" class="col-md-8">
      </div>
      <div class="publi">
      <img src="images/banner.jpg" alt="publicidad" class="col-md-2" />
      </div>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:contacto.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}