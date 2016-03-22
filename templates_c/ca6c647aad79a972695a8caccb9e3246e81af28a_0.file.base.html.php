<?php
/* Smarty version 3.1.30-dev/53, created on 2016-03-22 15:22:59
  from "/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/base.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_56f15543e72274_79584130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca6c647aad79a972695a8caccb9e3246e81af28a' => 
    array (
      0 => '/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/base.html',
      1 => 1458656516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f15543e72274_79584130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php 
new Block_titre_91760227556f15543e63352_17967289($_smarty_tpl);
?>
</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="content-language" content="fr" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- BOOTSTRAP CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>

<body>
  <div class="container">
    <div class="row">
      <div id="navigation" class="col-sm-9 col-md-9">
        <nav class="navbar navbar-default" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- <a class="navbar-brand" href="/">Acupuncture et médecine chinoise</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a role="link" href="/" accesskey="1" title="Accueil">Accueil</a></li>
                <li><a role="link" href="" accesskey="5" title="Consultation des pathologies">Consultation </a></li>
                <li><a role="link" href="/" accesskey="4" title="Recherche avancée de pathologies">Recherche avancée </a></li>
                <li><a role="link" href="/" accesskey="9" title="Informations">Informations</a></li> 
              </ul>

            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
      </div>
      <div id="user_info" class="container col-sm-3 col-md-3">
        <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
        <img id="avatar" src=""/>
        <a role="link" id="account" href=""><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a><br/>
        <a role="link" id="disconnect" href="deconnexion.php"><img id="disconnect_img"/>deconnexion</a>
        <?php } else { ?>
          <a role="link"href='index.php'>s'inscrire / se connecter</a>
        <?php }?>
      </div>
    </div><!-- /.container-fluid -->



    <div class="row"> <!-- "body" -->

    	<?php 
new Block_content_164699878456f15543e71284_15594830($_smarty_tpl);
?>


    </div> <!-- fin body -->

  </div> <!--Fin container-->
</body>
</html><?php }
/* {block 'titre'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/base.html */
class Block_titre_91760227556f15543e63352_17967289 extends Smarty_Internal_Block
{
public $name = 'titre';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>
Acupuncture et médecine chinoise<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'titre'} */
/* {block 'content'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/base.html */
class Block_content_164699878456f15543e71284_15594830 extends Smarty_Internal_Block
{
public $name = 'content';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>
contenu de la page<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'content'} */
}
