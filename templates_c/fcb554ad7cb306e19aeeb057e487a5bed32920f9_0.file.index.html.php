<?php
/* Smarty version 3.1.30-dev/53, created on 2016-03-11 14:10:30
  from "/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_56e2c3c6413f71_41320394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcb554ad7cb306e19aeeb057e487a5bed32920f9' => 
    array (
      0 => '/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/index.html',
      1 => 1457701828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pages/base.html' => 1,
  ),
),false)) {
function content_56e2c3c6413f71_41320394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_title_165735421156e2c3c640ffe9_89839538($_smarty_tpl);
?>

<?php 
new Block_content_164219092756e2c3c6412e02_57961497($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:pages/base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/index.html */
class Block_title_165735421156e2c3c640ffe9_89839538 extends Smarty_Internal_Block
{
public $name = 'title';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>
Acupuncture et médecine chinoise - Accueil<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'title'} */
/* {block 'content'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/index.html */
class Block_content_164219092756e2c3c6412e02_57961497 extends Smarty_Internal_Block
{
public $name = 'content';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<div class="col-md-8 col-sm-12"> <!-- Formulaires -->
  <div class="jumbotron text-center">
    <h2>Créer un compte</h2>
    <form id="form_create_account" action="" method="post">
      <div class="form-group">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="row">
              <label for="Lastname">Nom&nbsp;:</label>
              <input type="text" id="Lastname" class="form-control" required>
            </div>
            <div class="row">
              <label for="e-mail">E-mail&nbsp;:</label>
              <input type="email" id="e-mail" class="form-control" required>
            </div>
            <div class="row">
              <label for="password">Mot de passe&nbsp;:</label>
              <input type="password" id="password" class="form-control" required>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="row">
              <label for="name">Prénom&nbsp;:</label>
              <input type="text" id="name" class="form-control" required>
            </div>
            <div class="row">
              <label for="e-mail_confirm">Confirmation e-mail&nbsp;:</label>
              <input type="email" id="mail_confirm" class="form-control" required>
            </div>
            <div class="row">
              <label for="password_confirm">Confirmation mot de passe&nbsp;:</label>
              <input type="password" id="password_confirm" class="form-control" required>
            </div>
          </div>
        </div>
        <input type="submit" id="create_account" class="btn btn-default" value="Créer un compte"/>
      </div>
    </form>

    <h2>S'identifer</h2>
    <form id="form_identify" action="" method="post">
      <div class="form-group">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="row">
              <label for="e-mail_loggin">E-mail&nbsp;:</label>
              <input type="email" id="e-mail_loggin" class="form-control" required>
            </div>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="row">
              <label for="psw_loggin">Mot de passe&nbsp;:</label>
              <input type="password" id="psw_loggin" class="form-control" required>
            </div>
          </div>
          <input type="submit" id="identify" class="btn btn-default" value="S'identifier"/>
        </div>
      </div>
    </form>
  </div>
</div> <!-- Fin formulaires -->

<div class="col-md-4 col-sm-12"> <!-- Flux RSS -->

</div>

<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
}
