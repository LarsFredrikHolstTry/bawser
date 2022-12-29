<div class="tabs_container df fdc">
	<div id="user_info" class="tabcontent">
		<?php include 'components/right_menu_tabs/user_info.php'; ?>
	</div>
	<div id="last_events" class="tabcontent">
		<?php include 'components/right_menu_tabs/last_events.php'; ?>
	</div>
	<div id="last_forum" class="tabcontent">
		<?php include 'components/right_menu_tabs/last_forum.php'; ?>
	</div>

	<div class="df aic jcc mt-10">
		<div class="tab">
			<button class="tablinks" onclick="openTab(event, 'user_info')" id="user_info_default"></button>
			<button class="tablinks" onclick="openTab(event, 'last_events')" id="last_events_default"></button>
			<button class="tablinks" onclick="openTab(event, 'last_forum')" id="last_forum_default"></button>
		</div>
	</div>
</div>

<script>

	function openTab(evt, tabName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}

		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}

		document.getElementById(tabName).style.display = "block";
		evt.currentTarget.className += " active";

		localStorage.setItem('activeTab', tabName);
	}

	var activeTab = localStorage.getItem('activeTab');

	if(activeTab){
		document.getElementById(activeTab + '_default').click();
	} else {
		document.getElementById('user_info_default').click();
	}

</script>