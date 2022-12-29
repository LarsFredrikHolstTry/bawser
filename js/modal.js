toggleModal = (modal, loginBtn, closeBtn) => {
	var modal = document.getElementById(modal);
	var btn = document.getElementById(loginBtn);
	var [closeBtn] =
		document.getElementsByClassName(closeBtn);

	btn.onclick = function () {
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
};
