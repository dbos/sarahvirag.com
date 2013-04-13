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
