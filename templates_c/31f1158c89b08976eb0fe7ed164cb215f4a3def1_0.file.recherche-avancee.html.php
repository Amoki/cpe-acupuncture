<?php
/* Smarty version 3.1.30-dev/53, created on 2016-03-22 14:26:34
  from "/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/recherche-avancee.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_56f1480a96d610_37229873',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31f1158c89b08976eb0fe7ed164cb215f4a3def1' => 
    array (
      0 => '/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/recherche-avancee.html',
      1 => 1458651075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pages/base.html' => 1,
  ),
),false)) {
function content_56f1480a96d610_37229873 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_title_175190532056f1480a9528e0_14273242($_smarty_tpl);
?>

<?php 
new Block_content_105880406156f1480a96c900_98917939($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:pages/base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/recherche-avancee.html */
class Block_title_175190532056f1480a9528e0_14273242 extends Smarty_Internal_Block
{
public $name = 'title';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>
Acupuncture et médecine chinoise - Recherche avancée<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'title'} */
/* {block 'content'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/recherche-avancee.html */
class Block_content_105880406156f1480a96c900_98917939 extends Smarty_Internal_Block
{
public $name = 'content';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<div class="col-sm-12 col-md-12">
  <h1 role="heading" aria-level=1 >Recherche avancée de pathologies</h1>
  <div id="recherche">
    <form id="search" action="" method="post">
      <div class="form-group">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="row">
              <label for="symptomes">Symptômes&nbsp;:</label>
              <input type="text" id="symptomes" class="form-control" placeholder="Symptômes">
            </div>
            <div class="row">
              <label for="type_patho">Type de pathologie&nbsp;:</label>
              <select class="form-control" role="listbox" multiple></select>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="row">
              <label for="meridien">Méridien&nbsp;:</label>
              <select class="form-control" role="listbox" multiple></select>
            </div>
            <div class="row">
              <label for="mot_patho">Mots clés pathologies&nbsp;:</label>
              <input type="text" id="mot_patho" class="form-control" placeholder="Pathologie">
            </div>
          </div>
        </div>
        
        <div class="row">
          <!-- <div class="col-md-12 col-sm-12"> -->
          <fieldset>
          <legend>Caractéristiques&nbsp;:</legend>
            <!--   </div> -->
            <div class="btn-group col-md-4 col-sm-12" date-toggle="buttons">
              <label class="checkbox" for="mer_interne">
                <input id="mer_interne" role="checkbox" type="checkbox" name="meridien_group" value="interne"> Interne
              </label>
              <label class="checkbox" for="mer_externe">
                <input id="mer_externe" role="checkbox" type="checkbox" name="meridien_group" value="externe"> Externe
              </label>
            </div>
            <div class="btn-group col-md-4 col-sm-12" date-toggle="buttons">
              <label class="checkbox" for="tsang_plein">
                <input id="mer_interne" role="checkbox" type="checkbox" name="tsang_group" value="plein"> Plein
              </label>
              <label class="checkbox" for="tsang_vide">
                <input id="mer_externe" role="checkbox" type="checkbox" name="tsang_group" value="vide"> Vide
              </label>
              <label class="checkbox" for="tsang_chaud">
                <input id="mer_interne" role="checkbox" type="checkbox" name="tsang_group" value="chaud"> Chaud
              </label>
              <label class="checkbox" for="tsang_froid">
                <input id="mer_externe" role="checkbox" type="checkbox" name="tsang_group" value="froid"> Froid
              </label>
            </div>
            <div class="btn-group col-md-4 col-sm-12" date-toggle="buttons">
              <label class="checkbox" for="vois_vide">
                <input id="vois_vide" role="checkbox" type="checkbox" name="vois_group" value="vide"> Vide
              </label>
              <label class="checkbox" for="vois_plein">
                <input id="vois_plein" role="checkbox" type="checkbox" name="vois_group" value="plein"> Plein
              </label>
            </div>
          </fieldset>
        </div>
        <!--             <input type="radio" name="group1" value="externe">Externe<br> -->
      </div>
    </div>
    <input type="submit" role="button" id="btn_reinit" class="btn btn-default" value="Réinitialiser"/>
    <input type="submit" role="Submit" id="btn_rechercher" class="btn btn-default" value="Rechercher"/>
  </div>
</form>

</div>
<div id="resulat" class="table-responsive">
  <table class="table table-striped table-sortable">
    <thead>
      <tr>
        <th class="sorted">Pathologies</th>
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
