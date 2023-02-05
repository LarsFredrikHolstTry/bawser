<?php

include '_mission.php';

$active_mission = 2;
$active_mission_data = $missionConfig[$active_mission];

?>

<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
			<iconify-icon class="iconify-for-header" icon="vaadin:diploma"></iconify-icon>
		</div>
		<div class="main_content_header_text">
			Historier & Oppdrag
		</div>
	</div>

	<div class="df fdr">
		<div class="w-45 df fdc fg-10 main_content_context">
			<div class="innerDiv" >
				<div class="content_header df jcsb">
					<span>Freddy's grunnleggende opplæring</span>
				</div>
				<div class="content_context content_context_narrow-2">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dictum, sapien ut dictum ornare, lorem felis commodo enim, at gravida risus augue sit amet massa. 
				
				<div class="df fdc fg-5 mt-10">
					<?php
						foreach($missionConfig as $mission){
					?>
					<div class="<?= !$mission['in_progress'] && !$mission['done'] ? 'locked_mission' : '' ?> mission_list_object">
							<?php
							
							echo $mission['label'];

							if($mission['in_progress']){
								echo '<iconify-icon class="in_progress_mission big_icon" icon="line-md:loading-loop"></iconify-icon>';
							} elseif($mission['done']){
								echo '<iconify-icon class="done_mission big_icon" icon="material-symbols:check-small"></iconify-icon>';
							} else {
								echo '<iconify-icon class="big_icon" icon="material-symbols:lock"></iconify-icon>';
							}
							
						?>
					</div>
					<?php } ?>
				</div>
					
			</div>
			</div>
		</div>
		<div class="pl-0 w-55 df fdc fg-10 main_content_context">
			<div class="innerDiv">
				<div class="content_header df jcsb">
					<span><?= $active_mission_data['label'] ?></span>
				</div>
				<div class="content_context content_context_narrow-2">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dictum, sapien ut dictum ornare, lorem felis commodo enim, at gravida risus augue sit amet massa. 
				
				<div class="df fdc fg-5 mt-10">
				<?php foreach($missionConfig[$active_mission]['missions'] as $mission){ ?>
					<div class="<?= !$mission['in_progress'] && !$mission['done'] ? 'locked_mission' : '' ?> mission_list_object">
							<?php
							
							echo $mission['label'];

							if($mission['in_progress']){
								echo '<iconify-icon class="in_progress_mission big_icon" icon="line-md:loading-loop"></iconify-icon>';
							} elseif($mission['done']){
								echo '<iconify-icon class="done_mission big_icon" icon="material-symbols:check-small"></iconify-icon>';
							} else {
								echo '<iconify-icon class="big_icon" icon="material-symbols:lock"></iconify-icon>';
							}
							
						?>
					</div>
				<?php } ?>
				</div>
				<div class="content_context content_context_narrow-2 tac">
					Du har fullført <span class="text-green">60%</span> av oppdraget <?= $active_mission_data['label'] ?>.<br>
					Utfør resten av underoppdragene før du kan fortsette, lykke til!
				</div>
			</div>
			</div>
		</div>
	</div>
	<div class="df fdc fg-10 main_content_context">
		<div class="innerDiv" >
			<div class="content_header df jcc">
				<span>Belønning for fullført oppdrag (<?= $active_mission_data['label'] ?>)</span>
			</div>
			<div class="content_context content_context_narrow-2">
				<div class="df fdr fg-10">
					<?php foreach($missionConfig[$active_mission]['payout'] as $payout){ 
						
						$icon = null;
						$payout_str = null;

						if($payout['type'] == 'money'){
							$icon = '<iconify-icon class="mission_icon mission_payout_money" icon="material-symbols:attach-money-rounded"></iconify-icon>';
							$payout_str = number($payout['amount']) .' kr';
						} elseif($payout['type'] == 'exp'){
							$icon = '<iconify-icon class="mission_icon mission_payout_xp" icon="cryptocurrency:xp"></iconify-icon>';
							$payout_str = number($payout['amount']) .' exp';
						} elseif($payout['type'] == 'bullet'){
							$icon = '<iconify-icon class="mission_icon mission_payout_bullet" icon="mdi:bullet"></iconify-icon>';
							$payout_str = number($payout['amount']) .' kuler';
						}

						?>
					<div class="fg-1 mission_payout fg-5 df jcc fdc aic">
						<?= $icon ?>
						<?= $payout_str ?>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>