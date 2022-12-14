<?php

include 'left_menu_config.php';

?>

<div class="left_menu">
	<?php foreach($leftMenuConfig as $action){ 
		
		$isDivider = isset($action['divider']) && $action['divider'];
		$hasLabel = isset($action['label']) && $action['label'];
		$isLink = isset($action['link']) && $action['link'];

		?>
		<a class="<?= !$isLink ? 'no_link' : null ?>" href="<?= $isLink ? '?page='.$action['link'].'' : '#' ?>">
			<div class="<?= $isDivider ? 'mb-2' : 'left_menu_element shadow' ?>">
				<span><?= $hasLabel ? $action['label'] : '' ?></span>
			</div>
		</a>
	<?php } ?>
</div>