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
		<input type="submit" class="btn btn_active" value="Aktiv nå" />
		<input type="submit" class="btn default_btn" value="Sist time" />
		<input type="submit" class="btn default_btn" value="Siste døgn" />
	</div>
	<div class="df fdc aic fg-5">
		<h2 class="color-white">45 aktive nå</h2>
		<span>Viser oversikt over hvem som er <b>aktive nå</b></span>
	</div>
	<div class="df fg-20 fww">
		<?php 
		for($i = 0; $i <= 45; $i++){
			?>
		<div class="df jcc fg-5">
			<a href="?page=profile&user=username" class="secondary-link mt-1">
				<i class="fi fi-sr-user"></i>
				{username}<?= $i ?>
			</a>
		</div>
		<?php } ?>
	</div>
</div>
