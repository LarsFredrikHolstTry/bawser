	<?php

	require_once '../functions/ranks.php';

	?>
	
	<div class="left_menu">
		<div class="aic df jcsb shadow left_menu_element">
			<span>Topplisten siste timen</span>
		</div>
	<?php
	
	/**
	 * TODO: Order by EXP last hour
	 * COMMENT: Currently no order because there is no table with EXP
	 */
	$allPlayers = $db->run("SELECT a.ACC_name, uv.UV_rank
	FROM account a
	JOIN user_values uv ON a.ACC_id = uv.UV_acc_id
	ORDER BY CAST(uv.UV_EXP AS SIGNED) DESC
	LIMIT 10")->fetchAll();
	$i = 1;
	foreach($allPlayers as $players){

	?>
		<div class="left_menu_element shadow df aic fg-5">
			<span class="menu_cooldown"><?= $i ?></span>
			<span><?= $players['ACC_name'] ?><span class="text-secondary"> • <?= $rankListArray[$players['UV_rank']] ?></span></span>
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
	$allPlayers = $db->run("SELECT a.ACC_name, uv.UV_rank
	FROM account a
	JOIN user_values uv ON a.ACC_id = uv.UV_acc_id
	ORDER BY CAST(uv.UV_EXP AS SIGNED) DESC
	LIMIT 10")->fetchAll();
	$i = 1;
	foreach($allPlayers as $players){

	?>
		<div class="left_menu_element shadow df aic fg-5">
			<span class="menu_cooldown"><?= $i ?></span>
			<span><?= $players['ACC_name'] ?><span class="text-secondary"> • <?= $rankListArray[$players['UV_rank']] ?></span></span>
		</div>
	<?php $i++; } ?>
</div>