<?php

require_once 'functions/outcome.php';
include '_gta.php';

?>

<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
		<iconify-icon class="iconify-for-header" icon="material-symbols:directions-car"></iconify-icon>
		</div>
		<div class="main_content_header_text">
			Biltyveri
		</div>
	</div>
	
	<div class="df fdc fg-10 main_content_context">
		<div class="tac py-1 text-dark">
			Her kan du stjele biler av ulike typer. Du velger selv hvilken lokasjon du ønsker å stjele fra.<br>
			Noen lokasjoner gir deg mer penger, andre gir deg mer trening i enkle biltyveri og rankpoeng.
		</div>
		<div id="next-cards" class="df fdc fg-5">
			<?php for($i = 0; $i < count($gta); $i++){ 

			$gta_total = $gta_success[$i] + $gta_fails[$i];

			if($gta_success[$i] == 0){
				$percentage_fail_success_str = 0;
			} else {
				$percentage_fail_success = $gta_success[$i] / $gta_total * 100;
				$percentage_fail_success_str = $percentage_fail_success > 100 ? 100 : $percentage_fail_success;
			}

				?>
			<div class="next-card action_btn">
				<div class="next-card-content df fdr jcsb aic">
					<div class="df fdc fg-5">
						<h3><?= $gta[$i] ?></h3>
						<span><?= $gta_chance[$i] ?>% sannsynelighet</span>
						<span><?= $gta_success[$i] ?> av <?= $gta_total ?> vellykkede forsøk (<?= round($percentage_fail_success_str, 0) ?>%)</span>
					</div>
					<div class="df fdc fg-5">
						<span>Bilverdi <?= $gta_money_from[$i] ?> til <?= number($gta_money_to[$i]) ?> kr</span>
						<span>Rankpoeng <?= $gta_exp[$i] ?></span>
						<span>Ventetid <?= $gta_cooldown[$i] ?> sekunder</span>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<?php include 'components/activeCompetition.php'; ?>
	</div>
</div>

<script src="js/next-js-hover.js"></script>
