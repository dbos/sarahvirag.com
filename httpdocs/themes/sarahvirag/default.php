<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/top.php');?>
</div><div id="right">
<?php
$a = new Area('Main');
$a->display($c);
?>
</div>
<?php $this->inc('inc/bottom.php'); ?>
