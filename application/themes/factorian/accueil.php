<?php $view->inc('elements/header.php'); ?>
<div class="row">
  <div class="col-md-12 textCenter">
    <?php
      $a = new Area('Diaporama');
      $a->display($c);
    ?>
  </div>
</div>
<div class="row colonnes">
  <div class="col-md-4">
    <?php
      $a = new Area('Col1');
      $a->display($c);
    ?>
  </div>
  <div class="col-md-4">
    <?php
      $a = new Area('Col2');
      $a->display($c);
    ?>
  </div>
  <div class="col-md-4">
    <?php
      $a = new Area('Col3');
      $a->display($c);
    ?>
  </div>
</div>
<div class="row fondBlack">
  <div class="col-md-12" id="CTA">
    <?php
      $a = new Area('CTA');
      $a->display($c);
    ?>
  </div>
</div>
<div class="row colonnes">
  <div class="col-md-12">
    <?php
      $a = new Area('Contenu');
      //$a->enableGridContainer();
      $a->display($c);
    ?>
  </div>
</div>
<?php $view->inc('elements/footer.php'); ?>
