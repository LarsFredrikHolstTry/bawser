<?php

$active_time[0] = 1800;  // Aktive siste halvtime
$active_time[1] = 3600;  // Aktive siste timen
$active_time[2] = 86400; // Aktive sist døgn
$active_time[3] = 86400 * 7; // Aktive siste uke
$active_time[4] = 86400 * 30; // Aktive siste måned

$active = $active_time[0];

if(isset($_GET['active'])){
	$active = $active_time[$_GET['active']];
}

$playersOnlineSql = $db->run("SELECT * FROM account WHERE ACC_last_active >= ".time() - $active)->fetchAll();
$playersOnlineCount = count($playersOnlineSql);

if($active == $active_time[0] || $active == 0){
	$activeStr = 'aktive nå';
} elseif($active == $active_time[1]){
	$activeStr = 'aktive siste timen';
} elseif($active == $active_time[2]){
	$activeStr = 'aktive siste døgnet';
} elseif($active == $active_time[3]){
	$activeStr = 'aktive siste uken';
} else {
	$activeStr = 'aktive siste måneden';
}
