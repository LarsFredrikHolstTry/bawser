<?php

include '_playersOnline.php';

?>

<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
			<i class="fi fi-sr-bank"></i>
		</div>
		<div class="main_content_header_text">
			Players online
		</div>
	</div>
	<div class="df fdc fg-10 main_content_context">
		<div class="df fg-5">
			<a class="btn <?= !isset($_GET['active']) || $_GET['active'] == 0 ? 'btn_active' : '' ?>" href="?page=playersOnline&active=0">Aktiv nå</a>
			<a class="btn <?= isset($_GET['active']) && $_GET['active'] == 1 ? 'btn_active' : '' ?>" href="?page=playersOnline&active=1">Sist time</a>
			<a class="btn <?= isset($_GET['active']) && $_GET['active'] == 2 ? 'btn_active' : '' ?>" href="?page=playersOnline&active=2">Siste døgn</a>
			<a class="btn <?= isset($_GET['active']) && $_GET['active'] == 3 ? 'btn_active' : '' ?>" href="?page=playersOnline&active=3">Siste uken</a>
			<a class="btn <?= isset($_GET['active']) && $_GET['active'] == 4 ? 'btn_active' : '' ?>" href="?page=playersOnline&active=4">Siste måneden</a>

		</div>
		<div class="df fdc aic fg-5">
			<h2 class="color-white"><?= $playersOnlineCount ?> aktiv<?= $playersOnlineCount > 1 ? 'e' : ''; ?> nå</h2>
			<span>Viser oversikt over hvem som er <b><?= $activeStr ?></b></span>
		</div>
		<div class="df fg-20 fww">
			<?php 

			foreach($playersOnlineSql as $playersOnline){ 

			?>
				<div class="df jcc fg-5">
					<a href="?page=profile&user=<?= $playersOnline['ACC_name'] ?>" class="secondary-link mt-1">
						<i style="color: <?= $user_rank_colors[$playersOnline['ACC_status']] ?>" class="fi fi-sr-user"></i>
						<?= $playersOnline['ACC_name'] ?>
					</a>
				</div>
			<?php
			}
			?>
		</div>
	</div>
</div>