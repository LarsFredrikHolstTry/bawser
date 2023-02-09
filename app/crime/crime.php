<?php

require_once 'functions/outcome.php';
include '_crime.php';

?>
<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
		<iconify-icon class="iconify-for-header" icon="mdi:gun"></iconify-icon>
		</div>
		<div class="main_content_header_text">
			Kriminalitet
		</div>
	</div>
	
	<div class="df fdc fg-10 main_content_context">
		<?php

			if(isset($_GET['outcome'])){
				$outcome = $_GET['outcome'];

				if($outcome == 'success'){
					$money = $_GET['money'];
					$exp = $_GET['exp'];
	
					echo alert('success', 'Du klarte den kriminelle handlingen og får '.number($money).' kr og '.number($exp).' rankpoeng!');	
				} else if($outcome == 'failed'){
					echo alert('error', 'Du feilet den kriminelle handlingen!');
				}
			}

			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				$selected_crime = $_POST['selected_crime'];
				$isValidChoice = 	strlen($crime[$selected_crime]) > 0;

				if(!$crimeIsReady){
					echo alert('success', 'Du har ventetid!');
				} elseif($isValidChoice){
					$isSuccess = 		mt_rand(0,100) < $crime_chance[$selected_crime];
					$money_payout = mt_rand($crime_money_from[$selected_crime], $crime_money_to[$selected_crime]);
					$exp_payout   = $crime_exp[$selected_crime];
					$cooldown 		=	$crime_cooldown[$selected_crime];
					$success      = false;

					if($isSuccess){
						$success = true;
						echo alert('success', 'Du klarte den kriminelle handlingen og får '.number($money_payout).' kr og '.number($exp_payout).' rankpoeng!');
					} else {
						echo alert('error', 'Du feilet den kriminelle handlingen!');
					}

					setCooldown($db, $_SESSION['ID'], 'crime', time() + $cooldown);

					if($success){
						$updates = [
							'exp' => $exp_payout,
							'money' => $money_payout,
							'id' => $_SESSION['ID']
							];
						$db->run("UPDATE user_values SET UV_EXP = UV_EXP + :exp, UV_money = UV_money + :money WHERE UV_acc_id = :id", $updates);

						setOutcome($db, $_SESSION['ID'], 'crime', true);
						header("Location: ?page=crime&outcome=success&money=$money_payout&exp=$exp_payout");
					} else {
						setOutcome($db, $_SESSION['ID'], 'crime', false);
						header("Location: ?page=crime&outcome=failed");
						
					}
				} else {
					echo alert('error', 'Uventet feil, prøv igjen eller kontakt support!');
				}
			}

		?>
		<div class="tac py-1 text-dark">
			Her kan du utføre forskjellige kriminelle handlinger. De forskjellige handlingene vil gi deg<br>
			en variasjon i penger utbetalt og rankpoeng som gjør deg til en mer mektig mafia!
		</div>
		<?php if(!$crimeIsReady){ 
			echo alert('cooldown', 'Du har ventetid i <span id="cooldown">'.getCooldown($db, $_SESSION['ID'], 'crime').'</span>s!');
			?>
			<script type="text/javascript">
				countDownSeconds('cooldown', <?= getCooldown($db, $_SESSION['ID'], 'crime') ?>);
			</script>
			<?php
		 } else { ?>
		<form method="post">
			<div id="next-cards" class="df fdc fg-5">
				<?php for($i = 0; $i < count($crime); $i++){ 

					if($crime_success[$i] == 0 && $crime_fails[$i] == 0){
						$percentage_fail_success_str = 100;
					} else {
						$percentage_fail_success = $crime_success[$i] / $crime_fails[$i] * 100;
						$percentage_fail_success_str = $percentage_fail_success > 100 ? 100 : $percentage_fail_success;
					}
					?>
				<div class="next-card action_btn" onclick="submitForm(<?= $i ?>)">
					<div class="next-card-content df fdr jcsb aic">
						<div class="df fdc fg-5">
							<h3><?= $crime[$i] ?></h3>
							<span><?= $crime_chance[$i] ?>% sannsynelighet</span>
							<span><?= $crime_success[$i] ?> av <?= $crime_fails[$i] ?> vellykkede forsøk (<?= round($percentage_fail_success_str, 0) ?>%)</span>
						</div>
						<div class="df fdc fg-5">
							<span>Pengeverdi <?= $crime_money_from[$i] ?> til <?= number($crime_money_to[$i]) ?> kr</span>
							<span>Rankpoeng <?= $crime_exp[$i] ?></span>
							<span>Ventetid <?= $crime_cooldown[$i] ?> sekunder</span>
						</div>
					</div>
				</div>
				<?php } ?>
  		<input type="hidden" id="selected_crime" name="selected_crime">
			</div>
		</form>
		<?php } ?>
		<?php include 'components/activeCompetition.php'; ?>
	</div>
</div>

<script src="js/next-js-hover.js"></script>
<script>

  function submitForm(id) {
    document.getElementById('selected_crime').value = id;
    document.forms[0].submit();
  }

	var d = new Date();
var h = d.getHours();
var m = d.getMinutes();
var s = d.getSeconds();
var secondsUntilEndOfDate = (24*60*60) - (h*60*60) - (m*60) - s;
	console.log('secondsUntilEndOfDate:',secondsUntilEndOfDate)

</script>