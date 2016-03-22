<?php
/* Smarty version 3.1.30-dev/53, created on 2016-03-22 14:27:03
  from "/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/consultation.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_56f14827da6da4_40570836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ead1bb6b2da97079a41e3b28f2ea4345ee2e144' => 
    array (
      0 => '/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/consultation.html',
      1 => 1458652351,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pages/base.html' => 1,
  ),
),false)) {
function content_56f14827da6da4_40570836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_title_34553829556f14827d90ab2_94842877($_smarty_tpl);
?>

<?php 
new Block_content_204991923656f14827da50c0_75907289($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:pages/base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/consultation.html */
class Block_title_34553829556f14827d90ab2_94842877 extends Smarty_Internal_Block
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
class Block_content_204991923656f14827da50c0_75907289 extends Smarty_Internal_Block
{
public $name = 'content';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<div class="col-sm-12 col-md-12">
  <h1 role="heading" aria-level=1>Liste des pathologies</h1>
  <div id="resulat" class="table-responsive">
    <table class="table table-striped table-sortable">
      <thead>
        <tr>
          <th role="columnheader" class="sorted">Symptômes</th>
          <th role="columnheader" class="sorted">Pathologies</th>
          <th role="columnheader" class="sorted">Type de méridien</th>
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
          <td role="cell" class="sorted"><?php echo $_smarty_tpl->tpl_vars['patho']->value['mer'];?>
</td>
          <td role="cell" class="sorted"><?php echo $_smarty_tpl->tpl_vars['patho']->value['type'];?>
</td>
          <td role="cell" class="sorted"><?php echo $_smarty_tpl->tpl_vars['patho']->value['desc'];?>
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
