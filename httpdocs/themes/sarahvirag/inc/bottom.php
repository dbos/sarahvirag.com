    <?php   Loader::element('footer_required');?>
    <?php if (false): ?>
    <script type="text/javascript" src="<?php echo $this->getThemePath();?>/js/underscore-min.js"></script>
    <script type="text/javascript" src="<?php echo $this->getThemePath();?>/js/scripts.js"></script>
    <?php endif; ?>
    <?php 
	$u = new User();
	if (!$u->isLoggedIn()): ?>
            <script type="text/javascript" src="<?php echo $this->getThemePath()?>/js/jquery-ui-1.10.2.custom.min.js"></script>
	<?php endif; ?>
</body>
</html>
