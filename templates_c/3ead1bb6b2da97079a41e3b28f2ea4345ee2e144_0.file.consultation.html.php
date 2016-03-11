<?php
/* Smarty version 3.1.30-dev/53, created on 2016-03-11 14:35:18
  from "/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/consultation.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_56e2c9960005f4_28540965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ead1bb6b2da97079a41e3b28f2ea4345ee2e144' => 
    array (
      0 => '/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/consultation.html',
      1 => 1457703316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pages/base.html' => 1,
  ),
),false)) {
function content_56e2c9960005f4_28540965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_title_36414451156e2c995f2f0c8_51114573($_smarty_tpl);
?>

<?php 
new Block_content_183237605856e2c995f41e05_38900078($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:pages/base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/consultation.html */
class Block_title_36414451156e2c995f2f0c8_51114573 extends Smarty_Internal_Block
{
public $name = 'title';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>
Acupuncture et médecine chinoise - Consultation<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'title'} */
/* {block 'content'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/consultation.html */
class Block_content_183237605856e2c995f41e05_38900078 extends Smarty_Internal_Block
{
public $name = 'content';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<div class="col-sm-12 col-md-12">
  <h1>Liste des pathologies</h1>
  <div id="resulat" class="table-responsive">
    <table class="table table-striped table-sortable">
      <thead>
        <tr>
          <th class="sorted">Symptômes</th>
          <th class="sorted">Pathologies</th>
          <th class="sorted">Type de méridien</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_patho']->value, 'patho');
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
$_smarty_tpl->tpl_vars['patho']->_loop = true;
$__foreach_patho_0_saved = $_smarty_tpl->tpl_vars['patho'];
?>
        <tr>
          <td class="sorted"><?php echo $_smarty_tpl->tpl_vars['patho']->value['mer'];?>
</td>
          <td class="sorted"><?php echo $_smarty_tpl->tpl_vars['patho']->value['type'];?>
</td>
          <td class="sorted"><?php echo $_smarty_tpl->tpl_vars['patho']->value['desc'];?>
</td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['patho'] = $__foreach_patho_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
      </tbody>
    </table>
  </div>
</div>

<link href="/static/css/bootstrap-sortable.css" rel="stylesheet">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php echo '<script'; ?>
 type="text/javascript" src="/static/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/static/js/moment.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/static/js/bootstrap-sortable.js"><?php echo '</script'; ?>
>

<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
}
