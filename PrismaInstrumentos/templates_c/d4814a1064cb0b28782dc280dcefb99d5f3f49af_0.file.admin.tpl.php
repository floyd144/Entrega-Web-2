<?php
/* Smarty version 3.1.30, created on 2016-10-19 05:16:49
  from "C:\xampp\htdocs\web22\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806e5a1317877_84033746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4814a1064cb0b28782dc280dcefb99d5f3f49af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web22\\templates\\admin.tpl',
      1 => 1476846981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lista_prod.tpl' => 1,
    'file:lista_cat.tpl' => 1,
  ),
),false)) {
function content_5806e5a1317877_84033746 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>



  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ADMINSTRACION</h1>


  <div class="row">
    <container>
      <h3>Agregar Instrumento</h3>
        <form class="form-inline" id="formProducto" method="POST">
          <select class="form-control" name="categoria" title="categoria">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['categoria'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </select>


          <input type="text" class="form-control"  name="marca" value="" placeholder="marca">
          <input type="text" class="form-control"  name="modelo" value="" placeholder="modelo">
          <input type="text" class="form-control"  name="precio" value="" placeholder="precio">

          <input type="submit" class=" btn btn-success"  name="Agregar" value="Agregar">

        </form>
      </div>
    </container>

  </div>
  <div class="row">
    <container>
      <h3>Agregar Categoria</h3>
      <form class="form-inline" action="index.php?action=agregaCat" method="POST" enctype="multipart/form-data">
        <input type="text" class="form-control" name="categoriaNueva" value="" placeholder="nueva categoria">


        <input type="file" class="form-control" name="img[]" value="">

        <input type="submit" class=" btn btn-success" name="Agregar" value="Agregar">
      </form>
    </container>

      </div>
  <div class="row">
    <container>
      <h3>editar categoria</h3>
        <form class="form-inline" id="formEditarCategoria"  method="POST">


            <input type="text" class="form-control" name="id" value="" placeholder="Nro De Categoria">

            <input type="text" class="form-control" name="categoriaEdit" value="" placeholder="Nuevo nombre">
            <input type="submit" class=" btn btn-success" name="Editar" value="Editar">
        </form>



    </container>

  </div>

    <h1>LISTADO</h1>
    <h2>PROD</h2>
    <div class="">
      <?php $_smarty_tpl->_subTemplateRender("file:lista_prod.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </div>
    <h2>CAT</h2>
    <div class="">
      <?php $_smarty_tpl->_subTemplateRender("file:lista_cat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    </div>
  </body>
<?php }
}