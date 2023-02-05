<?php

if(isset($_GET['user'])){
	$account = $db->run("SELECT * FROM account WHERE ACC_name = ?", [$_GET['user']])->fetch();
	if(!$account){
		include 'no_user.php';
	} else {
		$user_values_visit = 		$db->run("SELECT * FROM user_values WHERE UV_acc_id = ?", [$account['ACC_id']])->fetch();
		$profile = 							$db->run("SELECT PRO_text FROM profiles WHERE PRO_acc_id = ?", [$account['ACC_id']])->fetchColumn();
		$avatar = 							$db->run("SELECT PROPIC_src FROM profile_picture WHERE PROPIC_acc_id = ?", [$account['ACC_id']])->fetchColumn();
		$userGangMembership = 	$db->run("SELECT * FROM gang_members WHERE GAME_acc_id = ".$account['ACC_id'])->fetch() ?? null;
		$currentRankUser = 			getCurrentRank($user_values_visit['UV_EXP'], $expToArray, $expFromArray, $rankListArray);

		if($userGangMembership != null){
			$userGang = $db->run("SELECT * FROM gang WHERE GANG_id = ".$userGangMembership['GAME_gang'])->fetch();
		}

		?>
		<div class="main_content">
			<div class="main_content_header">
				<div class="main_content_header_icon">
					<i class="fi fi-sr-bank"></i>
				</div>
				<div class="main_content_header_text">
					Profil
				</div>
			</div>
			<div class="df fdc main_content_context p-0">
				<div class="innerDiv">
					<div 
						style="background-size: cover; background-image: url(https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80)" 
						class="profile_header"
					></div>
					<div class="df jcsb profile_header_info">
						<div style="position: relative;">
							<img
								style="bottom: -5px; position: absolute; max-height: 140px; max-width: 140px;" 
								src="<?= $avatar ? $avatar : 'images/pb/standard.jpg' ?>" 
							/>
							<div style="margin-left: 160px;">	
								<span><?= $account['ACC_name'] ?></span> 
								<span class="text-secondary">• <span style="color: <?= $user_rank_colors[$account['ACC_status']] ?>"><?= $user_rank[$account['ACC_status']] ?></span></span>
							</div>
						</div>
						<div>
							<span>Sist aktiv: <?= date_to_text($account['ACC_last_active']) ?></span>
						</div>
					</div>
				</div>
			</div>

		<div class="df fdr">
			<div style="flex-basis: 25%;"class="df fdc fg-10 main_content_context">
				<div class="innerDiv">
					<div class="content_context_narrow">
						<ul>
							<li>Rank: <a class="primary-link" href="#"><?= $rankListArray[$currentRankUser] ?></a></li>
							<li>Familie: <a class="primary-link" href="#"><?= $userGang['GANG_name'] ?? 'Ingen' ?></a></li>
							<li>Pengerank: null</li>
							<li>Drap: null</li>
							<li>Oppdrag: null</li>
							<li class="mt-5">Timesoppdrag vunnet: null stk</li>
							<li>Daglig konkurranse vunnet: null stk</li>
							<li class="mt-5">Forumposter: <a class="primary-link" href="#">null</a></li>
							<li>Forumrank: <a class="primary-link" href="#">null</a></li>
							<li class="mt-5">Registrert:<br><?= date_to_text($account['ACC_register']) ?></li>
						</ul>
					</div>
				</div>
			</div>

			<div style="flex-basis: 75%; padding-left: 0px;" class="df fdc fg-10 main_content_context">
				<div class="innerDiv">
					<div class="content_context_narrow">
						<?php if(!$profile){ ?>
						<span class="text-secondary no-select tac">Ingen profiltekst</span>
						<?php } else { 
							echo $profile;
						 } ?>
					</div>
				</div>
			</div>
		</div>

	</div>
		<?php
	}
}
?>

