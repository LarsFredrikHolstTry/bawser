<?php

$sample_image = "https://mafioso.no/img/avatar/avatar1663353793-WyjbVa8.png";

?>

<div class="header shadow">
	<div style="width: 150px;" class="no-border df aic fdc fg-5 jcc">
		<img src="../images/small_logo.png" />
		<span>BAWSER</span>
	</div>
	<div class="middle_content aic jcsb">
		<div class="df jcc">
			<div class="df fg-50">
				<a href="?page=homepage" class="secondary-link df fdc aic fg-5">
					<iconify-icon class="big_icon" icon="ph:house-bold"></iconify-icon>
					<span>Forsiden</span>
				</a>
				<a href="?page=statistics" class="secondary-link df fdc aic fg-5">
					<iconify-icon class="big_icon" icon="foundation:graph-bar"></iconify-icon>
					<span>Statistikk</span>
				</a>
				<a href="?page=news" class="secondary-link df fdc aic fg-5">
					<iconify-icon class="big_icon" icon="fluent:news-16-regular"></iconify-icon>
					<span>Nyheter</span>
				</a>
			</div>
		</div>
	</div>
	<div class="right_content no-border df aic jcsb">
	<div class="df jcc">
			<div class="df fg-50">
				<div id="open_register_modal" class="secondary-link df fdc aic fg-5">
					<iconify-icon class="big_icon" icon="mdi:user-add"></iconify-icon>
					<span>Ny bruker</span>
				</div>
				<div id="open_login_modal" class="fg-5 secondary-link df fdc aic fg-5">
					<iconify-icon class="big_icon" icon="material-symbols:login-rounded"></iconify-icon>
					<span>Logg inn</span>
				</div>
			</div>
	</div>
	</div>
</div>

<!-- <script src="../js/modal.js"></script> -->
<?php include 'components/login_modal.php' ?>
<?php include 'components/register_modal.php' ?>
