<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
			<iconify-icon class="iconify-for-header" icon="mdi:user-off"></iconify-icon>
		</div>
		<div class="main_content_header_text">
			Profil
		</div>
	</div>
	<div class="df fdc fg-10 main_content_context">
		<div class="innerDiv">
			<div class="content_header df jcsb">
				<span>Unknown user</span>
			</div>
			<div class="content_context">
				<?= alert('error', "Fant ingen bruker med brukernavn '".$_GET['user']."'"); ?>
			</div>
		</div>
	</div>
</div>
