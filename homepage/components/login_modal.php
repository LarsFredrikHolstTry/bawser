
<div id="loginModal" class="modal df fdc">
  <div class="modal-container">
		<div class="modal-header jcsb">
			<div class="df fg-5 aic">
				<img style="height: 20px;" src="../images/small_logo.png">
				<span>
					Logg inn til Bawser
				</span>
			</div> 
			<span id="modal_login_close" class="modal-close">
				<iconify-icon icon="material-symbols:close-rounded"></iconify-icon>
			</span>
		</div>
		<div style="padding: 20px 80px;" class="modal-content fdc fg-10 aic">
			<div>
				<img class="myFlexedImage" src="../images/small_logo.png">
			</div>
			<div class="w-100 mt-5 df fg-5 fdc aic">
				<input class="w-100" type="text" placeholder="Brukernavn">
				<input class="w-100" type="text" placeholder="Passord">
			</div>
			<div class="w-100 df jcsb aic">
				<a class="secondary-link" href="?page=forgot_password">Glemt passord?</a>
				<input class="btn success_btn" type="submit" value="Logg inn"/>
			</div>
			<div style="margin-top: 20px;" class="w-100 df fg-5 fdc aic">
				<span>Har du ikke registrert bruker enda?</span>
				<span id="register-user" class="success-link">Registrer ny bruker her</span>
			</div>
		</div>
  </div>
</div>
<script>

	var openBtn = document.getElementById('open_login_modal');
	var modal = document.getElementById('loginModal');
	var closeBtn = document.getElementById('modal_login_close');

	openBtn.onclick = function () {
		modal.style.display = 'block';
	};

	closeBtn.onclick = function () {
		modal.style.display = 'none';
	};

	window.onclick = function (event) {
		if (event.target == modal) {
			modal.style.display = 'none';
		}
	};

	document.getElementById('register-user').onclick = function () {
		modal.style.display = 'none';
		document.getElementById('registerModal').style.display = 'block';
	};

</script>