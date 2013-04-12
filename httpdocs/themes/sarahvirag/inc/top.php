<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">
<head>
    <?php
    $this->addHeaderItem($html->javascript("http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"));
    Loader::element('header_required');
    ?>
    <link rel="stylesheet" type="text/css" href="<?php  echo $this->getStyleSheet('reset.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php  echo $this->getStyleSheet('styles.css')?>">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700">
</head>
<body>
    <div id="sidebar">
    <header>
        <div class="centered" id="logo"><img src="<?php echo $this->getThemePath();?>/img/logo.DELETEME.jpg" title="Sarah Virag Photography"></div>
        <h1 class="centered">Sarah Virag Photography</h1>
    </header>
    <nav class="centered"><ul> 
        <li><a href="#">Home</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
    </ul></nav>
    <div id="legend">
      <div class="marker circle"></div>
      <ul>
        <li><a href="#" class="circle"></a></li>
        <li><a href="#" class="circle"></a></li>
        <li><a href="#" class="circle"></a></li>
        <li><a href="#" class="circle"></a></li>
        <li><a href="#" class="circle"></a></li>
      </ul>
    </div>
    </div>
