<?php

include 'right_menu_config.php';

?>

<div class="right_menu">
	<?php foreach($rightMenuConfig as $action){
		
		$hasLabel = isset($action['label']) && $action['label'];
		$isDivider = isset($action['divider']) && $action['divider'];
		$isTabs = isset($action['tabs']) && $action['tabs'];

		if($isDivider){
			echo '<div class="menu_divider"></div>';
		} elseif($isTabs){
			include 'components/right_menu_tabs/right_menu_tabs.php';
		} else {

		?>
		<a class="aic df jcsb shadow right_menu_element <?= !$isLink ? 'no_link' : null ?>" href="<?= $isLink ? '?page='.$action['link'].'' : '#' ?>">
			<span><?= $hasLabel ? $action['label'] : '' ?></span>
		</a>
	<?php } } ?>
</div>