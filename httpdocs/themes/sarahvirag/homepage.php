<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('inc/top.php');
Loader::model('gallery');
echo '<script>sv_gallery='.json_encode(Gallery::getIndex()).'</script>';
?>
    <aside id="infobox" class="loading">
      <div class="controls">
        <a href="#" class="prev" rel="prev"><span>Previous</span></a>
        <a href="#" class="next" rel="next"><span>Next</span></a>
      </div>
      <div class="loader">
        <strong>Loading gallery</strong>
        <img alt="Loading gallery" title="Loading gallery" src="<?php echo $this->getThemePath();?>/img/ajax-loader.gif">
      </div>
      <div class="content"><h2></h2><div class="subtitle"></div></div>
      <div class="footer">
        <a href="#"><span>See all galleries</span></a>
      </div>
    </aside>
    <section id="slideshow">
        <ul>
        <li class="image-wrap active"><img data-subtitle="Summer 2013" src="img/pic1.DELETEME.jpg" alt="" title="Some buildings by a river"></li><!--
        --><li class="image-wrap"><img data-subtitle="Spring 2013" src="img/pic2.DELETEME.jpg" alt="" title="Falling flowers"></li><!--
        --><li class="image-wrap"><img data-subtitle="Spring 2013" src="img/pic3.DELETEME.jpg" alt="" title="Wow, look at that fucking boat"></li><!--
        --><li class="image-wrap"><img data-subtitle="Autumn 2011" src="http://nightwing2303.com/wp-content/uploads/2011/11/First-Impression-adidas-Crazy-8-1.jpg" alt="" title="God damn, these are some sneakers."></li><!--
        --><li class="image-wrap"><img data-subtitle="Summer 2011" src="img/pic4.DELETEME.jpg" alt="" title="Sup ladies."></li><!--
        --><li class="image-wrap endpiece"><img data-subtitle="Summer 2013" src="img/pic1.DELETEME.jpg" title="Some buildings by a river"></li>
        </ul>
    </section>
    <section id="content">
      <div class="page">
        <h2>About Sarah Virag</h2>
        <p>Lorem ipsum dolor sit amet consectetur</p>
      </div>
<?php
//$a = new Area('Main');
//$a->display($c);
?>
    </section>
<?php  $this->inc('inc/bottom.php');?>
