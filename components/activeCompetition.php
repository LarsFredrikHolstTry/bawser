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
					<span>med null kriminaliteter og 12 biltyveri</span>
				</div>
			</div>
		</div>
		<div class="innerDiv w-100 ml-5">
			<div class="tac content_context df fdc fg-10">
				<h3>Daglig konkurranse</h3>
				<h2 class="text-green">08:02:56</h2>
				<div class="df fdc">
					<span>Din plassering i dag er <span class="text-green">#4</span></span>
					<span>med 
						<?= getSuccessOutcomesBetweenDates($db, $_SESSION['ID'], 'crime', time() - strtotime("today"), time()) ?>
							kriminaliteter og 
						<?= getSuccessOutcomesBetweenDates($db, $_SESSION['ID'], 'gta', time() - strtotime("today"), time()) ?> 
							biltyveri</span>
				</div>
			</div>
		</div>
	</div>
</div>