<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/top.php');
Loader::model('gallery');
echo '<script>sv_gallery='.json_encode(Gallery::getIndex()).'</script>';
?>
    <aside id="infobox" class="loading">
      <div class="loader">
        <strong>Loading gallery</strong>
        <img alt="Loading gallery" title="Loading gallery" src="<?php echo $this->getThemePath();?>/img/ajax-loader.gif">
      </div>
      <div class="content"><h2></h2></div>
    </aside>
    <section id="slideshow">
        <ul>
        <li class="image-wrap active"><img src="img/pic1.DELETEME.jpg" alt="" title="Some buildings by a river"></li><!--
        --><li class="image-wrap"><img src="img/pic2.DELETEME.jpg" alt="" title="Falling flowers"></li><!--
        --><li class="image-wrap"><img src="img/pic3.DELETEME.jpg" alt="" title="Wow, look at that fucking boat"></li><!--
        --><li class="image-wrap"><img src="http://nightwing2303.com/wp-content/uploads/2011/11/First-Impression-adidas-Crazy-8-1.jpg" alt="" title="God damn, these are some sneakers."></li><!--
        --><li class="image-wrap"><img src="img/pic4.DELETEME.jpg" alt="" title="Sup ladies."></li><!--
        --><li class="image-wrap endpiece"><img src="img/pic1.DELETEME.jpg" title="Some buildings by a river"></li>
        </ul>
    </section>
<?php
//$a = new Area('Main');
//$a->display($c);
?>
<?php  $this->inc('inc/bottom.php');?>
