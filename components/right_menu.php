<?php

include 'right_menu_config.php';

?>

<div class="left_menu">
	<?php foreach($rightMenuConfig as $action){
		
		$hasLabel = isset($action['label']) && $action['label'];
		
		?>
		<a class="aic df jcsb shadow right_menu_element <?= !$isLink ? 'no_link' : null ?>" href="<?= $isLink ? '?page='.$action['link'].'' : '#' ?>">
			<span><?= $hasLabel ? $action['label'] : '' ?></span>
		</a>
	<?php } ?>
</div>