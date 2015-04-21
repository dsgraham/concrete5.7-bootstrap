<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); 
?>
<div class="container-fluid default">
  
  <div class="row page-title">
    <div class="col-sm-12">
      <h1 class="text-center">
        <?php 
          $page = Page::getCurrentPage();
          echo $page->getCollectionName();
        ?>
      </h1>
    </div>
  </div>

  <main>
    <?php
      $a = new Area('Main');
      $a->enableGridContainer();
      $a->display($c);
    ?>
  </main>
</div>
<?php $this->inc('elements/footer.php'); ?>