<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php   Loader::element('header_required');

#Script for google web fonts and to prevent FOUT in firefox  ?>
<script type="text/javascript">WebFontConfig={google:{families:['Droid+Sans::latin']}};(function(){var wf=document.createElement('script');wf.src=('https:'==document.location.protocol?'https':'http')+'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';wf.type='text/javascript';wf.async='true';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(wf,s);})();</script>


<!-- Site Header Content //-->
<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('main.css')?>" />
</head>
<body>
<!--start main container -->
<div id="main-container">
    <div id="left">
        <div id="header-image">
            <?php  
            $a = new GlobalArea('Header Image');
            $a->display($c);
            ?>
        </div>
        <div id="nav-area">
            <?php  
            $a = new GlobalArea('Nav Area');
            $a->display($c);
            ?>
        </div>
        <div id="left-extra">
            <?php  
            $a = new GlobalArea('Left Extra');
            $a->display($c);
            ?>
        </div>
