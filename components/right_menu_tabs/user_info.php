<div class="fg-5 df fdc aic">
	<i class="medium_icon fi fi-sr-info"></i>
	<span>Sted: <a class="primary-link" href="#"><?= $city[$user_values['UV_city']] ?></a></span>
</div>
<div class="tac mt-10 df fdc aic">
	<span style="color:#bbf706">
		<?= number($user_values['UV_money']) ?> kr
	</span>
</div>
<div class="tac fg-5 mt-10 df fdc aic">
	<a class="primary-link" href="#"><?= $rankListArray[$currentRank] ?></a>
	<span>Gjeng: <a class="primary-link" href="?page=gang"><?= $myGang['GANG_name'] ?></a></span>
	<span>Lager <a class="primary-link" href="#"><?= number($user_values['UV_bullets']) ?> kuler</a></span>
	<span style="color: #75cff5;"><?= $user_values['UV_points'] ?> poeng</span>
</div>
