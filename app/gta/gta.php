<?php

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
		<div class="df fdc fg-5">
			<?php for($i = 0; $i < count($gta); $i++){ 
				$percentage_fail_success = $gta_success[$i] / $gta_fails[$i] * 100;
				$percentage_fail_success_str = $percentage_fail_success > 100 ? 100 : $percentage_fail_success;
				?>
			<div class="action_btn">
				<div class="df fdr jcsb aic">
					<div class="df fdc fg-5">
						<h3><?= $gta[$i] ?></h3>
						<span><?= $gta_chance[$i] ?>% sannsynelighet</span>
						<span><?= $gta_success[$i] ?> av <?= $gta_fails[$i] ?> vellykkede forsøk (<?= round($percentage_fail_success_str, 0) ?>%)</span>
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
		<div class="innerDiv">
			<div class="content_header df jcsb">
				<span class="df aic fg-5">
					<iconify-icon class="iconify-for-header" icon="mdi:clock-time-five-outline"></iconify-icon> 
					Aktive konkurranser
				</span>
				<a href="#" class="secondary-link df aic">
					<iconify-icon class="iconify-for-header" icon="material-symbols:double-arrow"></iconify-icon>
					Gå til konkurranse senter
				</a>
			</div>
			<div class="content_context_narrow-2 df fdr jcsb">
				<div class="innerDiv w-100 mr-5">
					<div class="tac content_context df fdc fg-10">
						<h3>Timeskonkurranse</h3>
						<h2 class="text-green">00:23:52</h2>
						<div class="df fdc">
							<span>Din plassering denne timen er <span class="text-green">#3</span></span>
							<span>med 23 kriminaliteter og 12 biltyveri</span>
						</div>
					</div>
				</div>
				<div class="innerDiv w-100 ml-5">
					<div class="tac content_context df fdc fg-10">
						<h3>Daglig konkurranse</h3>
						<h2 class="text-green">08:02:56</h2>
						<div class="df fdc">
							<span>Din plassering i dag er <span class="text-green">#4</span></span>
							<span>med 78 kriminaliteter og 34 biltyveri</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
