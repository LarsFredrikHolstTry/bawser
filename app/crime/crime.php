<?php

include '_crime.php';

?>

<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
		<iconify-icon class="iconify-for-header" icon="mdi:gun"></iconify-icon>
		</div>
		<div class="main_content_header_text">
			Kriminalitet
		</div>
	</div>
	
	<div class="df fdc fg-10 main_content_context">
		<div class="tac py-1 text-dark">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim, 
			eros at suscipit bibendum, elit lacus venenatis magna, quis molestie 
			lectus eros sit amet orci. Nam aliquet nibh quis ligula suscipit, ac 
			viverra tortor gravida. Nam ac sollicitudin augue. Suspendisse tempor 
			velit sit amet nulla placerat, nec congue tortor aliquam. Nulla a accumsan 
			velit. In sapien tellus, volutpat et neque ac, viverra congue orci. 
			Cras neque lacus, maximus nec gravida sed, faucibus sed ante.
		</div>
		<div id="next-cards" class="df fdc fg-5">
			<?php for($i = 0; $i < count($crime); $i++){ 
				$percentage_fail_success = $crime_success[$i] / $crime_fails[$i] * 100;
				$percentage_fail_success_str = $percentage_fail_success > 100 ? 100 : $percentage_fail_success;
				?>
			<div class="next-card action_btn">
				<div class="next-card-content df fdr jcsb aic">
					<div class="df fdc fg-5">
						<h3><?= $crime[$i] ?></h3>
						<span><?= $crime_chance[$i] ?>% sannsynelighet</span>
						<span><?= $crime_success[$i] ?> av <?= $crime_fails[$i] ?> vellykkede forsøk (<?= round($percentage_fail_success_str, 0) ?>%)</span>
					</div>
					<div class="df fdc fg-5">
						<span>Bilverdi <?= $crime_money_from[$i] ?> til <?= number($crime_money_to[$i]) ?> kr</span>
						<span>Rankpoeng <?= $crime_exp[$i] ?></span>
						<span>Ventetid <?= $crime_cooldown[$i] ?> sekunder</span>
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

<script src="js/next-js-hover.js"></script>
<script type="text/javascript">

	$(".table").on(
		'click',
		'.table-row-clickable',
		function(e){
			e.preventDefault();
			var id = $(this).attr('value');
			var $form = $('#crimeForm');
			$form.find('input').val(id);
			$form.submit();
		}
	);

</script>