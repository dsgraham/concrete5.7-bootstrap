<?php
  defined('C5_EXECUTE') or die("Access Denied.");
  $this->inc('elements/header_top.php');
?>

<header>
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <?php
          $a = new GlobalArea('Site Title');
          $a->setBlockLimit(1);
          $a->display($c);
        ?>
      </div>
      <div class="col-sm-5 hidden-xs">
        <?php
          $a = new GlobalArea('Site Search');
          $a->setBlockLimit(1);
          $a->display($c);
        ?>
      </div>
    </div>
  </div>
  <?php
    $a = new GlobalArea('Header Navigation');
    $a->setBlockLimit(1);
    $a->display($c);
  ?>
</header>