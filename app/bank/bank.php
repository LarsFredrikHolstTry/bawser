<div class="main_content">
	<div class="main_content_header">
		<div class="main_content_header_icon">
			<iconify-icon class="iconify-for-header" icon="ri:bank-fill"></iconify-icon>
		</div>
		<div class="main_content_header_text">
			<?= $lang->bank ?>
		</div>
	</div>
	<div class="df fdr jcsb fg-10 main_content_context">
		<div class="innerDiv fg-1">
			<div class="content_context tac fdc df fg-1">
				<h2>Brukskonto</h2>
				<span class="text-secondary">Penger på hånden</span>
				<span><?= number($user_values['UV_money']) ?> kr</span>
			</div>
		</div>
		<div class="innerDiv fg-1">
			<div class="content_context tac fdc df fg-1">
				<h2>Sparekonto</h2>
				<span class="text-secondary">Penger i banken</span>
				<span><?= number($user_values['UV_bank_money']) ?> kr</span>
			</div>
		</div>
		<div class="innerDiv fg-1">
			<div class="content_context tac fdc df fg-1">
				<h2>Aksjer og fond</h2>
				<span>Avkastning (<span class="text-green">+null%</span>)</span>
				<span><?= number(null) ?> kr</span>
			</div>
		</div>
	</div>

	<div class="df fdc fg-10 main_content_context">
		<div class="innerDiv">
			<div class="content_header df jcsb">
				<span>Sparekonto</span>
			</div>
			<div class="content_context">
				<?php

					include '_bank.php';
					
				?>
				<div class="df jcsb">
					<div class="df fdc fg-10">
						Saldo: <?= number($user_values['UV_bank_money']) ?> kr
						<form method="post" class="df fg-5">
							<input id="amount" name="amount" type="text" placeholder="Sum" />
							<input type="submit" name="money_in" class="btn btn-small success_btn" value="Sett inn" />
							<input type="submit" name="money_out" class="btn btn-small default_btn" value="Ta ut" />
							<div class="df aic">
								<input type="checkbox" id="all_money" name="all_money">
								<label for="all_money"> Alt</label><br><br>
							</div>
						</form>
					</div>
					<div class="df fdc fg-1 tar">
						<span>Renter (<span class="text-green">+2.1%</span>)</span>
						<span class="text-secondary">Penger tjent på renter: null kr</span>
						<a class="primary-link" href="#">Vis transaksjoner</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/number_format.js"></script>
<script>

number_format("#deposit_amount");
number_format("#withdraw_amount");
number_format("#amount");

</script>