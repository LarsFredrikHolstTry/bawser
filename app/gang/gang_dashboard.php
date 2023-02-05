<?php

$myGangMembership 	= $db->run("SELECT * FROM gang_members WHERE GAME_acc_id = ".$_SESSION['ID'])->fetch();
$myGang 						= $db->run("SELECT * FROM gang WHERE GANG_id = ".$myGangMembership['GAME_gang'])->fetch();
$total_members    	= $db->run("SELECT COUNT(*) FROM gang WHERE GANG_id = ".$myGangMembership['GAME_gang'])->fetchColumn();
$getLeader 					= $db->run("SELECT GAME_acc_id FROM gang_members WHERE GAME_status = 4 AND GAME_gang = ".$myGang['GANG_id'])->fetchColumn();
$getLeaderUsername 	= $db->run("SELECT ACC_name FROM account WHERE ACC_id = ".$getLeader)->fetchColumn();

$gang_rank[0] = 'Associates';
$gang_rank[1] = 'Soldiers';
$gang_rank[2] = 'Caporegime';
$gang_rank[3] = 'Underboss';
$gang_rank[4] = 'Boss';

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
					Din gjeng: <?= $myGang['GANG_name'] ?> • 
					Status: <?= $gang_rank[$myGangMembership['GAME_status']] ?> • 
					Medlemmer: <?= $total_members ?> stk • 
					Gjengranking: <a class="primary-link" href="#">#null</a></span>
			</div>
		</div>
	</div>


	<div class="df">
		<div style="flex-basis: 50%;"class="df fdc fg-10 main_content_context">
			<div class="innerDiv">
				<a href="#">
					<div class="bb-1 df jcsb mt-0 content_context_ready content_context content_context_narrow">
						<span>Organisert gjengaktivitet</span>
						<span>Klar</span>
					</div>
				</a>
				<a href="#">
					<div class="bb-1 df jcsb mt-0 content_context content_context_narrow">
						<span>Firmautpressing</span>
						<span>1 dag, 54 min, 24 sek</span>
					</div>
				</a>
				<a href="#">
					<div class="bb-1 df jcsb mt-0 content_context content_context_narrow">
						<span>Gjengbank</span>
						<span>100 000 000 kr</span>
					</div>
				</a>
				<a href="#">
					<div class="bb-1 df jcsb mt-0 content_context content_context_narrow">
						<span>Kulelager</span>
						<span>100 kuler</span>
					</div>
				</a>
				<a href="#">
					<div class="bb-1 df jcsb mt-0 content_context content_context_narrow">
						<span>Forsvar</span>
					</div>
				</a>
				<a href="#">
					<div class="bb-1 df jcsb mt-0 content_context content_context_narrow">
						<span>Territorium</span>
					</div>
				</a>
				<a href="#">
					<div class="df jcsb mt-0 content_context content_context_narrow">
						<span>Virksomhet</span>
					</div>
				</a>
			</div>
		</div>
		<div style="flex-basis: 50%;" class="df fdc fg-10 main_content_context">
			<div class="innerDiv">
			<div class="content_header">
				<?= $myGang['GANG_name'] ?> • Oversikt
				</div>
				<div class="content_context">
					<ul>
						<li class="big_padding">Leder: <a class="primary-link" href="?page=profile&user=<?= $getLeaderUsername ?>"><?= $getLeaderUsername ?></a></li>
						<li class="big_padding">Medlemmer: <a class="primary-link" href="#"><?= $total_members ?> stk</a></li>
						<li class="big_padding">Gjengranking: <a class="primary-link" href="#">#null</a></li>
						<li class="big_padding">Penger tjent idag: null kr</li>
						<li class="big_padding">Penger tjent siste uken: null kr</li>
						<li class="big_padding">EXP ranket idag: null</li>
						<li class="big_padding">EXP ranket denne uken: null</li>
						<li class="big_padding">Familiebank: null kr • <a class="success-link" href="#">Donasjon</a></li>
						<li class="big_padding">Firmaer: null stk</li>
						<li class="big_padding">Gjeng opprettet: <?= date_to_text($myGang['GANG_created']) ?></li>
					</ul>
					<div class="mt-10 df fg-10">
						<a class="primary-link" href="#">Innstillinger</a> • <a class="primary-link" href="#">Søknader</a> • <a class="primary-link" href="#">Gjengforum</a>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="df fdc fg-10 main_content_context">
			<div class="innerDiv">
				<div class="content_header tac">
					<span>Firmaer</span>
				</div>
				<!-- <table class="table">
					<tr class="table-header">
						<th>Navn</th>
						<th>Type</th>
						<th>Eies av</th>
						<th>Ukentlig avkastning</th>
						<th>Total avkastning til gjeng</th>
					</tr>
					<tr>
						<td>Lorem</td>
						<td>Lorem</td>
						<td>Lorem</td>
						<td>Lorem</td>
						<td>Lorem</td>
					</tr>
				</table> -->
				<div class="content_context content_context_narrow">
					<?= alert('default', 'Gjengen har ingen firmaer') ?>
				</div>
			</div>
		</div>

		<div class="df fdc fg-10 main_content_context">
			<div class="innerDiv">
				<div class="content_header tac">
					<span>Medlemsoversikt (2 stk)</span>
				</div>
				<table class="table">
					<tr class="table-header">
						<th>Navn</th>
						<th>Familiestatus</th>
						<th>EXP i dag</th>
						<th>EXP totalt</th>
						<th>Bidrag til familien</th>
						<th>Medlem siden</th>
					</tr>
					<?php

$allMembers = $db->run("SELECT * FROM gang_members WHERE GAME_gang = ".$myGang['GANG_id'])->fetchAll();
$i = 1;
foreach($allMembers as $member){
	$getUsername 	= $db->run("SELECT ACC_name FROM account WHERE ACC_id = ".$member['GAME_acc_id'])->fetchColumn();

?>
					<tr>
						<td><a class="primary-link" href="?page=profile&user=<?= $getUsername ?>"><?= $getUsername ?></a></td>
						<td><?= $gang_rank[$member['GAME_status']] ?></td>
						<td>null</td>
						<td>null</td>
						<td>null</td>
						<td><?= date_to_text($member['GAME_joined']) ?></td>
					</tr>
<?php } ?>
				</table>
			</div>
		</div>
</div>
