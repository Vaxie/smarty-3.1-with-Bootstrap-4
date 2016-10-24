<?php
/* Smarty version 3.1.30, created on 2016-10-23 15:58:44
  from "/Applications/MAMP/htdocs/smarty-3.1.30/demo/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580cc214eb9a31_93878762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dae2983cc5dc168f5f66fd1520e96de79fce1ba3' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty-3.1.30/demo/templates/index.tpl',
      1 => 1477231114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_580cc214eb9a31_93878762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '937084658580cc214e51bb9_39524706';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

</div><!-- /.container -->
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
