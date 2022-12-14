<?php

include 'left_menu_config.php';

?>

<div class="left_menu">
	<?php foreach($leftMenuConfig as $action){ 
		
		$isDivider = isset($action['divider']) && $action['divider'];
		$hasLabel = isset($action['label']) && $action['label'];
		$isLink = isset($action['link']) && $action['link'];

		?>
		<a class="left_menu_element <?= !$isLink ? 'no_link' : null ?>" href="<?= $isLink ? '?page='.$action['link'].'' : '#' ?>">
			<span><?= $hasLabel ? $action['label'] : '' ?></span>
		</a>
	<?php } ?>
</div>