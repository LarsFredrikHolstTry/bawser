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

		<!-- TODO: Create a component for this!!! -->
		<div class="stepper-wrapper">
      <div class="stepper-item stepper-active">
        <div class="step-counter"></div>
        <div class="step-name-active">Freddy</div>
      </div>
      <div class="stepper-item ">
        <div class="step-counter"><iconify-icon icon="material-symbols:lock"></iconify-icon></div>
        <div class="step-name">Låst</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter"><iconify-icon icon="material-symbols:lock"></iconify-icon></div>
        <div class="step-name">Låst</div>
      </div>
      <div class="stepper-item">
        <div class="step-counter"><iconify-icon icon="material-symbols:lock"></iconify-icon></div>
        <div class="step-name">Låst</div>
      </div>
			<div class="stepper-item">
        <div class="step-counter"><iconify-icon icon="material-symbols:lock"></iconify-icon></div>
        <div class="step-name">Låst</div>
      </div>
			<div class="stepper-item">
        <div class="step-counter"><iconify-icon icon="material-symbols:lock"></iconify-icon></div>
        <div class="step-name">Låst</div>
      </div>
			<div class="stepper-item">
        <div class="step-counter"><iconify-icon icon="material-symbols:lock"></iconify-icon></div>
        <div class="step-name">Låst</div>
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

<!-- TODO: Move this to styling.css, clean up first!!! -->
<style>
.stepper-wrapper {
  display: flex;
  justify-content: space-between;
  margin: 20px 0px 10px 0px;
}
.stepper-item {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  flex: 1;
}

.stepper-item::before {
  position: absolute;
  content: "";
  border-bottom: 2px solid #333333;
  width: 100%;
  top: 25px;
  left: -50%;
  z-index: 2;
}

.stepper-item::after {
  position: absolute;
  content: "";
  border-bottom: 2px solid #333333;
  width: 100%;
  top: 25px;
  left: 50%;
  z-index: 2;
}

.stepper-item .step-counter {
  position: relative;
  z-index: 5;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: #333333;
	margin-bottom: 6px;
}

.step-name, .step-counter {
	color: grey;
}

.stepper-active .step-counter {
	border: 2px solid #bbf706;
	width: 46px;
  height: 46px;
	background: url('https://images.unsplash.com/photo-1633220744880-cdf6c2b39f57?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80');
	background-size: 50px;
	background-position: center;
}

.step-name-active {
	color: #bbf706;
}

.stepper-item.completed .step-counter {
  background-color: #4bb543;
}

.stepper-item.completed::after {
  position: absolute;
  content: "";
  border-bottom: 2px solid #4bb543;
  width: 100%;
  top: 20px;
  left: 50%;
  z-index: 3;
}

.stepper-item:first-child::before {
  content: none;
}
.stepper-item:last-child::after {
  content: none;
}


</style>