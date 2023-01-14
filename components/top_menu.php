<?php

$sample_image = "https://mafioso.no/img/avatar/avatar1663353793-WyjbVa8.png";

?>

<div class="header shadow">
	<div class="profile_content">
		<div class="df aic">
			<div class="profile_picture">
				<img class="shadow" style="max-height: 110px;" src=<?= $sample_image ?> />
			</div>
			<div class="user_info">
				<ul>
					<li class="df fdc fg-3">
						<div>
							<?= $lang->logged_in_as ?>
						</div>
						<div>
							<a href="?page=profile&user=<?= $account['ACC_name'] ?? 'null' ?>" class="primary-link mt-1">
								<i style="color: #FF7902" class="fi fi-sr-user"></i> 
								<?= $account['ACC_name'] ?? 'null' ?>
							</a>
						</div>
					</li>
					<li>null</li>
					<li><?= str_replace("{amount}", '1 000 000', $lang->money_balance); ?></li>
					<li>null</li>
					<li><?= $lang->gang ?>: <a href="?page=gang" class="primary-link">null</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="middle_content aic jcsb">
		<div class="df fdc jcc">
			<div class="df fg-20" style="height: 50px;">
				<div class="df fdc fg-5 aic" style="width: 50%;">
					<div><b><?= $lang->rank_points ?></b> <span class="text-secondary">• 145 678</span></span></div>
					<div class="progress-bar-rank">
						<span class="progress-bar-rank-fill" style="width: 70%;"></span>
					</div>
				</div>
				<div class="df fdc fg-5 aic" style="width: 50%;">
					<div><b><?= $lang->health ?></b><span class="text-secondary"> • 100%</span></span></div>
					<div class="progress-bar-health">
						<span class="progress-bar-health-fill" style="width: 100%;"></span>
					</div>
				</div>
			</div>
			<div style="height: 50px;" class="df fg-50">
				<a href="?page=home" class="secondary-link df fdc aic fg-5">
					<i class="big_icon fi fi-sr-home"></i>
					<span><?= $lang->home ?></span>
				</a>
				<a href="?page=messages" class="secondary-link df fdc aic fg-5">
					<i class="big_icon fi fi-sr-envelope"></i>
					<span><?= $lang->messages ?></span>
				</a>
				<a href="?page=notifications" class="secondary-link df fdc aic fg-5">
					<i class="big_icon fi fi-sr-bell"></i>
					<span><?= $lang->notifications ?></span>
				</a>
				<a href="?page=map" class="secondary-link df fdc aic fg-5">
					<i class="big_icon fi fi-sr-map"></i>
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
				<i class="fi fi-sr-users"></i>
			</a>
			<a href="?page=settings" class="mt-5 medium_icon secondary-link df fdc aic fg-5">
				<i class="fi fi-sr-settings"></i>
			</a>
			<a href="?page=logout" class="logout mt-5 medium_icon secondary-link df fdc aic fg-5">
				<i class="fi fi-sr-exit"></i>
			</a>
		</div>
		<div class="df jcc aic fg-5">
			<i class="big_icon mt-1 fi fi-rr-clock-five"></i>
			<div class="df fdc">
				<span class="clock_text">21:08</span>
				<span>02.01.02020</span>
			</div>
		</div>
	</div>
</div>