<?php

include 'right_menu_config.php';

?>

<div class="left_menu">
	<?php foreach($rightMenuConfig as $action){ ?>
		<div class="shadow <?= isset($action['divider']) && $action['divider'] ? 'mb-1' : 'right_menu_element' ?>">
			<span><?= isset($action['label']) ? $action['label'] : '' ?></span>
		</div>
	<?php } ?>
</div>