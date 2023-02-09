countDownSeconds = (id, seconds) => {
	var timeleft = seconds;
	setInterval(function () {
		timeleft--;
		document.querySelectorAll(`#${id}`).forEach((e) => {
			e.textContent = timeleft;
		});
		if (timeleft < 0) {
			document.querySelectorAll(`#${id}`).forEach((e) => {
				e.textContent = 0;
			});
			location.reload();
		}
	}, 1000);
};
