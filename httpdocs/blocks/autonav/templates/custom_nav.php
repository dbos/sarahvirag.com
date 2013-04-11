<?php  defined('C5_EXECUTE') or die(_("Access Denied."));
$navItems = $controller->getNavItems();
?>
<ul class="nav-ul">
<?php  foreach ($navItems as $ni) {
	$classes = array();
	if ($ni->isCurrent) {
		$classes[] = 'nav-li-selected';
	}
	if ($ni->inPath) {
		$classes[] = 'nav-li-path-selected';
	}
	if ($ni->isFirst) {
		$classes[] = 'nav-li-first';
	}
	$classes = implode(" ", $classes);
	?>
	<li class="<?php echo $classes?>">
		<a class="<?php echo $classes?>" href="<?php echo $ni->url?>" target="<?php echo $ni->target?>"><?php echo $ni->name?></a>
	</li>
<?php  } ?>
</ul>
