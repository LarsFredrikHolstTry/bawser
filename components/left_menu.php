<?php

include 'left_menu_config.php';

?>

<div class="left_menu">
	<?php foreach($leftMenuConfig as $action){ 
		
		$isDivider = isset($action['divider']) && $action['divider'];
		$hasLabel = isset($action['label']) && $action['label'];
		$isLink = isset($action['link']) && $action['link'];
		$isReady = isset($action['ready']) && $action['ready'];
		$hasCooldown = isset($action['cooldown']) && $action['cooldown'];

		if($isDivider){
			echo '<div class="menu_divider"></div>';
		} else {
		?>
		<a class="aic df jcsb <?= $isReady ? 'isReady' : '' ?> shadow left_menu_element <?= !$isLink ? 'no_link' : null ?>" href="<?= $isLink ? '?page='.$action['link'].'' : '#' ?>">
			<span><?= $hasLabel ? $action['label'] : '' ?></span>
			<?= !$isReady && $hasCooldown ? '<div class="menu_cooldown">'.$action['cooldown'].'s</div>' : '' ?>
		</a>
	<?php } 
} ?>
</div>