<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); 
?>

<div class="home">

  <div class="jumbotron">
    <div class="container">
    <?php
      $a = new Area('Jumbotron');
      $a->display($c);
    ?>
    </div>
  </div>

  <main>
    <div class="container">
      <?php
        $a = new Area('Main');
        $a->setAreaGridMaximumColumns(12);
        $a->display($c);
      ?>
    </div>
  </main>

</div>

<?php $this->inc('elements/footer.php'); ?>