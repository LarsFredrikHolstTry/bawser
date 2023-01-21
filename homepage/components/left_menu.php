	<div class="left_menu">
		<div class="aic df jcsb shadow left_menu_element">
			<span>Topplisten siste timen</span>
		</div>
	<?php
	
	/**
	 * TODO: Order by EXP last hour
	 * COMMENT: Currently no order because there is no table with EXP
	 */
	$allPlayers = $db->run("SELECT * FROM account")->fetchAll();
	$i = 1;
	foreach($allPlayers as $players){

	?>
		<div class="left_menu_element shadow df aic fg-5">
			<span class="menu_cooldown"><?= $i ?></span>
			<span><?= $players['ACC_name'] ?><span class="text-secondary"> • Null</span></span>
		</div>
	<?php $i++; } ?>

	<div class="aic df jcsb shadow no_link">
		<span></span>
	</div>
	<div class="aic df jcsb shadow left_menu_element">
		<span>Leaderboard</span>
	</div>
	<?php

	/**
	 * TODO: Order by total EXP
	 * COMMENT: Currently no order because there is no table with EXP
	 */
	$allPlayers = $db->run("SELECT * FROM account")->fetchAll();
	$i = 1;
	foreach($allPlayers as $players){

	?>
		<div class="left_menu_element shadow df aic fg-5">
			<span class="menu_cooldown"><?= $i ?></span>
			<span><?= $players['ACC_name'] ?><span class="text-secondary"> • Null</span></span>
		</div>
	<?php $i++; } ?>
</div>