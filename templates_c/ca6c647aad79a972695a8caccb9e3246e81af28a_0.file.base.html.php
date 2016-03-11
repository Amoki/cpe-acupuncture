<?php
/* Smarty version 3.1.30-dev/53, created on 2016-03-11 14:44:24
  from "/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/base.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_56e2cbb8cbf917_00974115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca6c647aad79a972695a8caccb9e3246e81af28a' => 
    array (
      0 => '/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/base.html',
      1 => 1457703861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e2cbb8cbf917_00974115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php 
new Block_titre_105890583756e2cbb8cbc3d1_48752323($_smarty_tpl);
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
        <nav class="navbar navbar-default">
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
                <li><a href="/" title="Accueil">Accueil</a></li>
                <li><a href="/" title="Consultation des pathologies">Consultation </a></li>
                <li><a href="/" title="Recherche avancée de pathologies">Recherche avancée </a></li>
                <li><a href="/" title="Informations">Informations</a></li> 
              </ul>

            </div><!-- /.navbar-collapse -->
          </div>
        </nav>
      </div>
      <div id="user_info" class="container col-sm-3 col-md-3">
        <img id="avatar" src=""/>
        <a id="account" href="">Pseudo</a>
        <a id="disconnect" href=""><img id="disconnect_img"/>...</a>
      </div>
    </div><!-- /.container-fluid -->



    <div class="row"> <!-- "body" -->

    	<?php 
new Block_content_100549609956e2cbb8cbe881_95362090($_smarty_tpl);
?>


    </div> <!-- fin body -->

  </div> <!--Fin container-->
</body>
</html><?php }
/* {block 'titre'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/base.html */
class Block_titre_105890583756e2cbb8cbc3d1_48752323 extends Smarty_Internal_Block
{
public $name = 'titre';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->blockNesting++;
?>
Acupuncture<?php
$_smarty_tpl->ext->_inheritance->blockNesting--;
}
}
/* {/block 'titre'} */
/* {block 'content'} /Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/pages/base.html */
class Block_content_100549609956e2cbb8cbe881_95362090 extends Smarty_Internal_Block
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
