<div class="main_content">

<div class="main_content_header">
	<div class="main_content_header_icon">
		<i class="fi fi-sr-bank"></i>
	</div>
	<div class="main_content_header_text">
		<?= $lang->bank ?>
	</div>
</div>
<div class="df fdc fg-10 main_content_context">
	<div class="innerDiv">
		<div class="content_header df jcsb">
			<span><?= str_replace("{interest}", '2.75', $lang->yourBankAcc); ?></span>
			<a class="primary-link" href="#"><?= $lang->changeBank ?></a>
		</div>
		<div class="content_context">
			<div class="df jcsb aic fdc-on-mobile fg-5">
				<div class="fg-3 df fdc">
					<span><?= $lang->accountBalance ?></span>
					<span class="medium_icon color-white"><?= str_replace("{amount}", '1 000 000', $lang->money_balance); ?></span>
				</div>
				<div class="fg-1 df aic">
					<input type="text" id="deposit_amount" class="medium_input" placeholder="<?= $lang->depositAmount ?>" />
					<input type="submit" class="btn success_btn"value="<?= $lang->deposit ?>" />
				</div>
				<div class="fg-1 df aic">
					<input type="text" id="withdraw_amount" class="medium_input" placeholder="<?= $lang->withdrawAmount ?>" />
					<input type="submit" class="btn error_btn" value="<?= $lang->withdraw ?>" />
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="content_header df jcsb">
			<span><?= $lang->transferMoney ?></span>
		</div>
		<div class="content_context">
			<div class="df jcsb aic fdc-on-mobile fg-5">
				<div class="fg-5 df aic">
					<input type="text" class="medium_input" placeholder="<?= $lang->username ?>" />
					<input type="text" class="medium_input" id="amount" placeholder="<?= $lang->amount ?>" />
				</div>
				<div class="fg-5 df aic">
					<div class="select">
						<select id="standard-select">
							<option value="Option 1"><?= $lang->money ?></option>
							<option value="Option 2"><?= $lang->points ?></option>
						</select>
					</div>
					<input type="submit" class="btn error_btn" value="<?= $lang->transfer ?>" />
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