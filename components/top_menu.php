<div class="header shadow">
	<div class="profile_content">
		<div class="df aic">
			<div class="profile_picture">
				<img class="shadow" style="max-height: 110px;" src="https://mafioso.no/img/avatar/avatar1663353793-WyjbVa8.png" />
			</div>
			<div class="user_info">
				<ul>
					<li class="df fdc fg-3">
						<div>
							<?= $lang->logged_in_as ?>
						</div>
						<div>
							<a href="?page=profile&user=username" class="mt-1">
								<i style="color: #FF7902" class="fi fi-sr-user"></i> 
								{username}
							</a>
						</div>
					</li>
					<li>Gudfar</li>
					<li><?= str_replace("{amount}", '1 000 000', $lang->money_balance); ?></li>
					<li>London</li>
					<li><?= $lang->family ?>: <a href="?page=family">{familienavn}</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="middle_content">

	</div>
	<div class="right_content">

	</div>
</div>