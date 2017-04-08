<!DOCTYPE html>
<html>
  <head>
    <link href="<?php echo $view->getThemePath(); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $view->getThemePath(); ?>/css/style.css" rel="stylesheet">
    <?php Loader::element('header_required'); ?>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="row">
          <div class="col-md-4 textCenter"><img src="<?php echo $view->getThemePath(); ?>/img/logo.png" alt="logo"/></div>
          <div class="col-md-8 ">
            <?php
            $a = new GlobalArea('Menu');
            $a->display($c);
            ?>
          </div>      
        </div>
      </header>
