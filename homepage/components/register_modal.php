
<div id="registerModal" class="modal df fdc">
  <div class="modal-container">
		<div class="modal-header jcsb">
			<div class="df fg-5 aic">
				<img style="height: 20px;" src="../images/small_logo.png">
				<span>
					Registrer bruker til Bawser
				</span>
			</div> 
			<span id="modal_register_close" class="modal-close">
				<iconify-icon icon="material-symbols:close-rounded"></iconify-icon>
			</span>
		</div>
		<div style="padding: 20px 80px;" class="modal-content fdc fg-10 aic">
			<div>
				<img class="myFlexedImage" src="../images/small_logo.png">
			</div>
			<div class="w-100 mt-5 df fg-5 fdc aic">
				<input class="w-100" type="text" placeholder="Brukernavn">
				<input class="w-100" type="text" placeholder="E-post">
				<input class="w-100" type="text" placeholder="Passord">
				<input class="w-100" type="text" placeholder="Gjenta passord">
			</div>
			<div class="w-100 df jcc aic">
				<input class="btn success_btn" type="submit" value="Registrer"/>
			</div>
			<div style="margin-top: 20px;" class="w-100 df fg-5 fdc aic">
				<span>Har du bruker fra før?</span>
				<div id="login-user" class="success-link">Logg inn her</div>
			</div>
		</div>
  </div>
</div>
<script>
	var registerModal = document.getElementById('registerModal');
	var openRegisterBtn = document.getElementById('open_register_modal');
	var closeRegisterBtn = document.getElementById('modal_register_close');

		openRegisterBtn.onclick = function () {
			registerModal.style.display = 'block';
	};

	closeRegisterBtn.onclick = function () {
		registerModal.style.display = 'none';
	};

	window.onclick = function (event) {
		if (event.target == registerModal) {
			registerModal.style.display = 'none';
		}
	};

	document.getElementById('login-user').onclick = function () {
		registerModal.style.display = 'none';
		document.getElementById('loginModal').style.display = 'block';
	};
</script>