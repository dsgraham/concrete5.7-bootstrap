<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <?php
          $a = new GlobalArea('Footer Area 1');
          $a->display($c);
        ?>
      </div>
      <div class="col-md-4 col-sm-12">
        <?php
          $a = new GlobalArea('Footer Area 2');
          $a->display($c);
        ?>
      </div>
      <div class="col-md-4 col-sm-12">
        <?php
          $a = new GlobalArea('Footer Area 3');
          $a->display($c);
        ?>
      </div>
    </div> <!-- /row -->
  </div> <!-- /container -->
</footer>
<?php $this->inc('elements/footer_bottom.php');?>
