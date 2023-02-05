<?php

$submittedID = isset($_POST['cat']);

if($submittedID){
	echo alert('warning', 'Du utførte kriminalitet og fikk 10 exp og 50 kr');
}

$crime[0] = 'Lorem Ipsum Kriminalitet';
$crime_chance[0] = 55;
$crime_success[0] = 15;
$crime_fails[0] = 25;
$crime_money_from[0] = 1;
$crime_money_to[0] = 50000;
$crime_exp[0] = 2;
$crime_cooldown[0] = 120;

$crime[1] = 'Lorem Ipsum Kriminalitet';
$crime_chance[1] = 55;
$crime_success[1] = 23;
$crime_fails[1] = 35;
$crime_money_from[1] = 1;
$crime_money_to[1] = 50000;
$crime_exp[1] = 2;
$crime_cooldown[1] = 120;

$crime[2] = 'Lorem Ipsum Kriminalitet';
$crime_chance[2] = 55;
$crime_success[2] = 23;
$crime_fails[2] = 35;
$crime_money_from[2] = 1;
$crime_money_to[2] = 50000;
$crime_exp[2] = 2;
$crime_cooldown[2] = 120;


?>