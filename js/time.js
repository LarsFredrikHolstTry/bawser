function startTime() {
	var today = new Date();
	var h = today.getHours();
	var m = today.getMinutes();
	var s = today.getSeconds();
	h = checkTime(h);
	m = checkTime(m);
	s = checkTime(s);
	document.getElementById('clock').innerHTML =
		h + ':' + m + ':' + s;
	var t = setTimeout(startTime, 1000);
}

function checkTime(i) {
	if (i < 10) {
		i = '0' + i;
	}
	return i;
}

function startDate() {
	var date = new Date();
	var day = ('0' + date.getDate()).slice(-2);
	var days = [
		'Søndag',
		'Mandag',
		'Tirsdag',
		'Onsdag',
		'Torsdag',
		'Fredag',
		'Lørdag',
	];
	var today = date.getDay();
	var months = [
		'Januar',
		'Februar',
		'Mars',
		'April',
		'Mai',
		'Juni',
		'Juli',
		'August',
		'September',
		'Oktober',
		'November',
		'Desember',
	];
	var month_today = date.getMonth();
	document.getElementById('date').innerHTML =
		days[today] + ' ' + day + '. ' + months[month_today];
}
