<div class="tabs_container df fdc">
	<div id="user_info" class="tabcontent">
		<?php include 'components/right_menu_tabs/user_info.php'; ?>
	</div>
	<div id="last_events" class="tabcontent">
		<?php include 'components/right_menu_tabs/last_events.php'; ?>
	</div>

	<div class="df aic jcc mt-10">
		<div class="tab">
			<button class="tablinks" onclick="openTab(event, 'user_info')" id="defaultOpen"></button>
			<button class="tablinks" onclick="openTab(event, 'last_events')"></button>
		</div>
	</div>
</div>

<script>

	function openTab(evt, cityName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}

	document.getElementById("defaultOpen").click();

</script>