<?php

$avatar = $db->run("SELECT PROPIC_src FROM profile_picture WHERE PROPIC_acc_id = ? AND PROPIC_active = 1", [$account['ACC_id']])->fetchColumn();

$avatar = $avatar ? $avatar : 'images/pb/standard.jpg';

$currentRank = getCurrentRank($user_values['UV_EXP'], $expToArray, $expFromArray, $rankListArray);

/**
 * Math calculation to get amount of percentage until next rank
 * TODO: Move this to a function
 */
if($currentRank < count($rankListArray)){
	$exp_from = $expFromArray[$currentRank];
	$exp_to = $expFromArray[$currentRank + 1];
	$total_exp_this_rank = $user_values['UV_EXP'] - $exp_from;
	$total_exp_demand = $exp_to - $exp_from;
	$exp_demand_this_rank = round($total_exp_this_rank/$total_exp_demand * 100, 0);
} else {
	$exp_demand_this_rank = 100;
}

?>
<div class="header shadow">
	<div class="profile_content">
		<div class="df aic">
			<div class="profile_picture">
				<img class="shadow" style="max-width: 110px; max-height: 110px;" src=<?= $avatar ?> />
			</div>
			<div class="user_info">
				<ul>
					<li class="df fdc fg-3">
						<div>
							<?= $lang->logged_in_as ?>
						</div>
						<div>
							<a href="?page=profile&user=<?= $account['ACC_name'] ?? 'null' ?>" class="primary-link mt-1">
								<iconify-icon class="user-icon iconify-for-header" style="color: <?= $user_rank_colors[$account['ACC_status']] ?>" icon="mdi:user"></iconify-icon>
								<?= $account['ACC_name'] ?? 'null' ?>
							</a>
						</div>
					</li>
					<li><? $rankListArray[$currentRank] ?></li>
					<li><?= str_replace("{amount}", number($user_values['UV_money']), $lang->money_balance); ?></li>
					<li><?= $city[$user_values['UV_city']] ?></li>
					<li><?= $lang->gang ?>: <a href="?page=gang" class="primary-link"><?= $myGang['GANG_name'] ?? 'Ingen' ?></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="middle_content aic jcsb">
		<div class="df fdc jcc">
			<div class="df fg-20" style="height: 50px;">
				<div class="df fdc fg-5 aic" style="width: 50%;">
					<div><b><?= $lang->rank_points ?></b> <span class="text-secondary">• <?= $user_values['UV_EXP'] ?></span></span></div>
					<div class="progress-bar-rank">
						<span class="progress-bar-rank-fill" style="width: <?= $exp_demand_this_rank ?>%;"></span>
					</div>
				</div>
				<div class="df fdc fg-5 aic" style="width: 50%;">
					<div><b><?= $lang->health ?></b><span class="text-secondary"> • <?= $user_values['UV_health'] ?>%</span></span></div>
					<div class="progress-bar-health">
						<span class="progress-bar-health-fill" style="width: <?= $user_values['UV_health'] ?>%;"></span>
					</div>
				</div>
			</div>
			<div style="height: 50px;" class="df fg-50">
				<a href="?page=home" class="secondary-link df fdc aic fg-5">
					<iconify-icon class="big_icon" icon="mdi:house"></iconify-icon>
					<span><?= $lang->home ?></span>
				</a>
				<a href="?page=messages" class="secondary-link df fdc aic fg-5">
					<iconify-icon class="big_icon" icon="vaadin:envelope"></iconify-icon>
					<span><?= $lang->messages ?></span>
				</a>
				<a href="?page=notifications" class="secondary-link df fdc aic fg-5">
					<iconify-icon class="big_icon" icon="mdi:bell"></iconify-icon>
					<span><?= $lang->notifications ?></span>
				</a>
				<a href="?page=map" class="secondary-link df fdc aic fg-5">
					<iconify-icon class="big_icon" icon="material-symbols:map-sharp"></iconify-icon>
					<span><?= $lang->map ?></span>
				</a>
			</div>
		</div>
		<div class="df fdc fg-5" style="margin-right: 30px;">
			<img src="images/small_logo.png" />
		</div>
	</div>
	<div class="right_content">
		<div style="height: 50px; padding: 0px 40px;" class="df jcsb">
			<a href="?page=playersOnline" class="mt-5 medium_icon secondary-link df fdc aic fg-5">
				<iconify-icon icon="mdi:user-multiple"></iconify-icon>
			</a>
			<a href="?page=settings" class="mt-5 medium_icon secondary-link df fdc aic fg-5">
				<iconify-icon icon="material-symbols:settings"></iconify-icon>
			</a>
			<a href="?page=logout" class="logout mt-5 medium_icon secondary-link df fdc aic fg-5">
				<iconify-icon icon="material-symbols:logout"></iconify-icon>
			</a>
		</div>
		<div class="df jcc aic fg-5">
			<!-- <i class="big_icon mt-1 fi fi-rr-clock-five"></i> -->
			<div class="df fdc tac">
				<span class="clock_text" id="clock"><?= date('H:i:s', time()) ?></span>
				<span id="date"><?= date_to_text_long(time()) ?></span>
			</div>
		</div>
	</div>
</div>