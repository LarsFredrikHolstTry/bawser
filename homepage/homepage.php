<?php

$cities[0] = 'kobenhavn';
$cities[1] = 'london';
$cities[2] = 'oslo';
$cities[3] = 'paris';
$cities[4] = 'praha';

$activeCityName = isset($_GET['city']) ? $cities[$_GET['city']] : $cities[0];
$activeCity = isset($_GET['city']) ? $_GET['city'] : 0;

?>

<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
			<iconify-icon class="iconify-for-header" icon="ph:house-bold"></iconify-icon>
		</div>
		<div class="main_content_header_text">
			Forsiden
		</div>
	</div>
	<div class="df fdc fg-10 main_content_context">
		<div>
			<div class="content_header df jcsb">
				<span>Kartoversikt</span>
			</div>
			<div class="content_context">
				<div class="df fg-5 mb-5 jce">
					<?php

					for($i = 0; $i < count($cities); $i++){

					?>
				<a 
					class="btn <?= $activeCity == $i ? 'btn_active' : '' ?>"
					href="?city=<?= $i ?>">
					<span style="text-transform: capitalize;" ><?= $cities[$i] ?></span>
				</a>
					<?php } ?>
				</div>
				<div class="df jcc">
					<div>

						<!-- sample family start -->
						<div class="tag" style="left: 405px; top: 425px;">
							<span class="df aic fg-5" style="color: #a65411; font-size: 20px;">&#x2B22; 
								<span style="margin-top: 2px; color: white; font-size: 11px;">Familie Lorem</span>
							</span>
						</div>
						<!-- sample family end -->

						<!-- sample family start -->
						<div class="tag" style="left: 75px; top: 105px;">
							<span class="df aic fg-5" style="color: #4a601f; font-size: 20px;">&#x2B22; 
								<span style="margin-top: 2px; color: white; font-size: 11px;">Firma Ipsum</span>
							</span>
						</div>
						<!-- sample family end -->

						<img 
						style="max-width:100%; max-height:100%;" 
						src="../images/cityMaps/<?= $activeCityName ?>.png"
						/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
.tag {
    float: left;
    position: relative;

    z-index: 1000;
    margin-bottom: -50px;
		background-color: rgba(0,0,0,.5);
		border-radius: 5px;
		padding: 0px 10px 4px 10px;
}
</style>