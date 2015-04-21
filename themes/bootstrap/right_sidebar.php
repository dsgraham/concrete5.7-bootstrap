<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); 
?>

<div class="container-fluid right-sidebar">

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

  <div class="row">
    <div class="col-sm-8">
      <main>
        <?php
          $a = new Area('Main');
          $a->setAreaGridMaximumColumns(12);
          $a->display($c);
        ?>
      </main>
    </div>
    <div class="col-sm-4 sidebar">
      <?php
        $a = new GlobalArea('Right Sidebar');
        $a->display($c);
      ?>
    </div>
</div>

<?php $this->inc('elements/footer.php'); ?>