<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath()?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath()?>/css/bootstrap-theme.min.css">
    <?php echo $html->css($view->getStylesheet('main.less'))?>
    <?php Loader::element('header_required', array('pageTitle' => $pageTitle));?>
</head>
<body>

<div class="<?php echo $c->getPageWrapperClass(); if ($c->isEditMode()) echo ' edit-mode' ?>">