<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
			<i class="fi fi-sr-bank"></i>
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
				<?= alert('error', "No user with name ".$_GET['user']." found in the database."); ?>
			</div>
		</div>
	</div>
</div>
