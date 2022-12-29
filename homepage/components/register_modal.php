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
			<div id="success_msg" class="w-100">
				<?php echo alert('success', '<span id="successTxt"></span>') ?>
			</div>
			<div id="error_msg" class="w-100">
				<?php echo alert('error', '<span id="errorTxt"></span>') ?>
			</div>
			<div>
				<img class="myFlexedImage" src="../images/small_logo.png">
			</div>
			<div class="w-100 mt-5 df fg-5 fdc aic">
				<input class="w-100" id="username" type="text" name="username" placeholder="Brukernavn">
				<input class="w-100" id="email" type="email" name="email" placeholder="E-post">
				<input class="w-100" id="password" type="password" name="password" placeholder="Passord">
				<input class="w-100" id="repeatPassword" type="password" name="repeatPassword" placeholder="Gjenta passord">
			</div>
			<div style="margin-top: 20px;" class="w-100 df fg-5 fdc aic">
				<span class="tac">Ved å registrere deg på Bawser godtar du vilkårene som kan leses
					<a class="success-link" target="_blank" href="terms.php">vilkårene</a>
				</span>
			</div>
			<div class="w-100 df jcc aic">
				<input id="register-btn" class="btn success_btn" type="submit" name="register" value="Registrer"/>
			</div>
			<div style="margin-top: 20px;" class="w-100 df fg-5 fdc aic">
				<span>Har du bruker fra før?</span>
				<div id="login-user" class="success-link">Logg inn her</div>
			</div>
		</div>
  </div>
</div>
<style> 

#success_msg {
	display: none;
}

#error_msg {
	display: none;
}

</style>
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

	$(document).ready(function() {
        $('#register-btn').click(function() {
            // $("#feedback-container").load("components/feedback.php");
						var username = $("#username").val();
						var email = $("#email").val();
						var password = $("#password").val();
						var repeatPassword = $("#repeatPassword").val();

            $.ajax({
                url: 'components/_register.php',
                method: 'post',
                data: {
									username: username,
									email: email,
									password: password,
									repeatPassword: repeatPassword
                },
                success: function(response) {
										var feedback = response;
                    feedback = feedback.split("<|>");

                    var feedbackText = feedback[0];
                    var feedbackType = feedback[1];

										if(feedbackType == 'error'){
											document.getElementById('success_msg').style.display = 'none';
											document.getElementById('error_msg').style.display = 'block';
											$("#errorTxt").text(feedbackText);
										} else if(feedbackType == 'success') {
											document.getElementById('error_msg').style.display = 'none';
											document.getElementById('success_msg').style.display = 'block';
											$("#successTxt").text(feedbackText);
										}
                }
            });
        });
    });

</script>