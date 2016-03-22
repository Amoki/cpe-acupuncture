<?php
/* Smarty version 3.1.30-dev/53, created on 2016-03-22 14:48:25
  from "/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_56f14d2997ff78_85878742',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcb554ad7cb306e19aeeb057e487a5bed32920f9' => 
    array (
      0 => '/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/index.html',
      1 => 1458654503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pages/base.html' => 1,
  ),
),false)) {
function content_56f14d2997ff78_85878742 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_title_169150517156f14d2997d316_60875829($_smarty_tpl);
?>

<?php 
new Block_content_1215226256f14d2997f597_80110726($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:pages/base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/index.html */
class Block_title_169150517156f14d2997d316_60875829 extends Smarty_Internal_Block
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
class Block_content_1215226256f14d2997f597_80110726 extends Smarty_Internal_Block
{
public $name = 'content';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>

<div class="col-md-8 col-sm-12"> <!-- Formulaires -->
  <div class="jumbotron text-center">
    <h2 role="heading" aria-level=2>Créer un compte</h2>
    <form id="form_create_account" role="form" action="inscription.php" method="post">
      <div class="form-group">
        <div class="row">

          <div class="row"> 
            <div class="col-md-6 col-sm-12">
              <label for="lastname">Nom&nbsp;:</label>
              <input type="text" role="textbox" id="lastname" class="form-control" name="lastname" placeholder="Nom"required aria-required="true">
            </div>
            <div class="col-md-6 col-sm-12">
              <label for="name">Prénom&nbsp;:</label>
              <input type="text" role="textbox" id="name" class="form-control" name="name" placeholder="Prénom" required aria-required="true">
            </div>
          </div>
          <div class="row">
           <div class="col-md-6 col-sm-12">
            <label for="e-mail">E-mail&nbsp;:</label>
            <input type="email" role="textbox" id="e-mail" class="form-control" name="mail" placeholder="E-mail" required aria-required="true">
          </div>
          <div class="col-md-6 col-sm-12">
            <label for="e-mail_confirm">Confirmation e-mail&nbsp;:</label>
            <input type="email" role="textbox" id="mail_confirm" class="form-control" placeholder="Confimation e-mail" required aria-required="true" aria-required="true">
          </div>
        </div>
        <div class="row">
         <div class="col-md-6 col-sm-12">
          <label for="password">Mot de passe&nbsp;:</label>
          <input type="password" role="textbox" id="password" class="form-control" name="mdp" placeholder="Mot de passe" required aria-required="true">
        </div>
        
        <div class="col-md-6 col-sm-12">
          <label for="password_confirm">Confirmation mot de passe&nbsp;:</label>
          <input role="textbox" type="password" id="password_confirm" class="form-control" placeholder="Confirmation mot de passe" required aria-required="true">
        </div>
      </div>
      <div class="row">
       <input role="Submit" type="submit" id="create_account" class="btn btn-default" value="Créer un compte"/>
     </div>
   </div>
 </form>
 <div class="row space">
 </div>
 <h2 role="heading" aria-level=2 >S'identifer</h2>
 <form id="form_identify" role="form" action="connexion.php" method="post">
  <div class="form-group">
    <div class="row">
      <div class="row">
        <div class="col-md-6 col-sm-12">

          <label for="e-mail_loggin">E-mail&nbsp;:</label>
          <input type="email" role="textbox" id="e-mail_loggin" class="form-control" name="email" placeholder="E-mail" required aria-required="true">
          </div>
        <div class="col-md-6 col-sm-12">
          <label for="psw_loggin">Mot de passe&nbsp;:</label>
          <input type="password" role="textbox" id="psw_loggin" class="form-control" name="mdp" placeholder="Mot de passe" required aria-required="true">
        </div>
        <div class="row">
          <input role="Submit" type="submit" id="identify" class="btn btn-default" value="S'identifier"/>
        </div>
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
