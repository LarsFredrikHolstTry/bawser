<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
			<iconify-icon class="iconify-for-header" icon="material-symbols:settings"></iconify-icon>
		</div>
		<div class="main_content_header_text">
			Settings
		</div>
	</div>

	<?php

include '_settings.php';

$avatar = $db->run("SELECT PROPIC_src, PROPIC_date, PROPIC_size FROM profile_picture WHERE PROPIC_acc_id = ? AND PROPIC_active = 1", [$_SESSION['ID']])->fetch();
$avatar_exist = $avatar['PROPIC_src'] ?? null;

?>

	<div class="df fdr">
		<div style="flex-basis: 55%;" class="df fdc fg-10 main_content_context">
			<div class="innerDiv">
				<div class="content_header df jcsb">
					<span>Endre profilbilde</span>
				</div>
				<div class="content_context_narrow df fdr">
					<div style="flex-basis: 45%;">
						<img class="shadow" style="max-width: 110px; max-height: 110px;" src=<?= $avatar_exist ? $avatar['PROPIC_src'] : 'images/pb/standard.jpg' ?> />
					</div>
					<div style="flex-basis: 55%;">
					<form method="post" enctype="multipart/form-data">
						<ul class="pl-5">
							<li><a class="secondary-link" href="#">Slett (Denne har ingen funksjon enda)</a></li>
							<li class="mt-10">Lastet opp: <?= $avatar_exist ? date_to_text($avatar['PROPIC_date']) : 'null' ?></li>
							<li>Størrelse: <?= $avatar_exist ? $avatar['PROPIC_size']/1000 : 'null' ?>kb</li>
							<li class="mt-10"><input type="file" name="file"></li>
						</ul>
						<input class="mt-10 btn success_btn btn-small w-100" name="uploadAvatar" type="submit" value="Last opp"/>
					</form>
					</div>
				</div>
			</div>
		</div>
		<div style="flex-basis: 45%; padding-left: 0px;" class="df fdc fg-10 main_content_context">
			<div class="innerDiv">
				<div class="content_header df jcsb">
					<span>Endre passord</span>
				</div>
				<div class="content_context_narrow-1">
					<form class="df fdc fg-5" method="post">
						<input class="w-100 bsbb" type="password" name="oldPassword" placeholder="Gammelt passord">
						<input class="mt-5 w-100 bsbb" type="password" name="newPassword" placeholder="Nytt passord">
						<input class="mt-5 w-100 bsbb" type="password" name="repeatNewPassword" placeholder="Nytt passord igjen">
						<input class="mt-5 btn success_btn btn-small" name="changePassword" value="Endre passord" type="submit">
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="df fdc fg-10 main_content_context">
		<div class="innerDiv">
			<div class="content_header df jcsb">
				<span>Endre profiltekst</span>
			</div>
			<div class="content_context">
			<form class="df fdc fg-5" method="post">
				<textarea name="profileText" id="tinyMCEEditor">
					<?= $profile ?>
				</textarea>
				<input class="btn success_btn btn-small" name="saveProfile" value="Lagre profilen" type="submit">
			</form>
			</div>
		</div>
	</div>

</div>
