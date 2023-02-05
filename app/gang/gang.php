<?php

$price = 10000000;

$gang_member = 	$db->run("SELECT * FROM gang_members WHERE GAME_acc_id = ?", [$_SESSION['ID']])->fetch();
$gangs = 				$db->run("SELECT * FROM gang")->fetchAll();

if($gang_member){
	include 'gang_dashboard.php';
} else {
?>
<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
			<iconify-icon class="iconify-for-header" icon="mdi:hat-fedora"></iconify-icon>
		</div>
		<div class="main_content_header_text">
			Gjengsenter
		</div>
	</div>
	<div class="df fdc fg-10 main_content_context">
		<div class="innerDiv">
			<div class="content_context_narrow-2 df jcsb">
				<span>
					Du er ikke medlem i en gjeng. For å bli medlem må du <a class="secondary-link" href="#">sende en søknad</a>
			</div>
		</div>
	</div>

	<div class="df fdc fg-10 main_content_context">
		<div class="innerDiv">
			<div class="tac content_header">
				<span>Gjengoversikt</span>
			</div>
			<div class="content_context_narrow-2">
				<?php

					if(!$gangs){
						echo alert('default', 'Det finnes ingen familier');
					} else {
						?>
						<table class="table">
							<tr>
								<th style="width: 1%;"></th>
								<th>Navn</th>
								<th>Leder</th>
								<th>Firmaer</th>
								<th>By</th>
								<th>Medlemmer</th>
								<th>Opprettet</th>
							</tr>
							<?php

							$i = 0;

							foreach($gangs as $gang){
								$leader = $db->run("SELECT GAME_acc_id FROM gang_members WHERE GAME_gang = ? AND GAME_status = 1", [$gang['GANG_id']])->fetchColumn();
								$members = $db->run("SELECT count(*) FROM gang_members WHERE GAME_gang = ?", [$gang['GANG_id']])->fetchColumn();

								$i++;

								?>
								<tr>
									<td>#<?= $i ?></td>
									<td><?= $gang['GANG_name'] ?></td>
									<td><?= $leader ?></td>
									<td>null</td>
									<td><?= $city[$gang['GANG_city']] ?></td>
									<td><?= $members ?></td>
									<td><?= date_to_text_long($gang['GANG_created']); ?></td>
								</tr>
								<?php

							}

							?>
						</table>
						<?php

					}

				?>
			</div>
		</div>
	</div>

	<div class="df fdc fg-10 main_content_context">
		<div class="innerDiv">
			<div class="tac content_header">
				<span>Opprett gjeng</span>
			</div>
			<form method="post">
				<div class="content_context_narrow-2 df fdc fg-10 tac">
				<?php 

					if(isset($_POST['make_gang'])){
						$gang_name = $_POST['gang_name'];
						$gang_exist = $db->run("SELECT * FROM gang WHERE GANG_name = ?", [$gang_name])->fetch();

						if($price > $user_values['UV_money']){
							echo alert('error', 'Du har ikke nok penger til å opprette en gjeng');
						} elseif($gang_exist){
							echo alert('error', 'Familienavnet er ikke ledig');
						} else {

							$gang = [
								'GANG_name' => $gang_name,
								'GANG_city' => $user_values['UV_city'],
								'GANG_created' => time()
							];
							$db->insert('gang', $gang);
							$gang_id = $db->lastInsertId();

							$gang_member = [
								'GAME_acc_id' => $_SESSION['ID'],
								'GAME_gang' => $gang_id,
								'GAME_status' => 4,
								'GAME_joined' => time()
							];
							$db->insert('gang_members', $gang_member);

							$db->run("UPDATE user_values SET UV_money = UV_money - ? WHERE UV_acc_id = ?", [$price, $_SESSION['ID']]);

							header("Location: ?page=gang");
						}
					}

					?>
					<span>Det er 6 av 6 ledige gjengplasser</span>
					<span>Det koster <?= number($price) ?> kr å opprette ny gjeng</span>
					<div>
						<input type="text" name="gang_name" placeholder="Skriv inn gjengnavn" />
					</div>
					<div>
						<input type="submit" name="make_gang" class="btn success_btn" value="Opprett gjeng" />
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
}
?>