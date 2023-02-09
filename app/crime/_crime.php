<?php

$crimeIsReady = isReady($db, $_SESSION['ID'], 'crime');

$crime[0] = 'Svindle turister på gaten med korttriks';
$crime_chance[0] = 50;
$crime_success[0] = getOutcomeAmount($db, true, $_SESSION['ID'], 'crime', 0, 0, 0);
$crime_fails[0] = getOutcomeAmount($db, false, $_SESSION['ID'], 'crime', 0, 0, 0);
$crime_money_from[0] = 1;
$crime_money_to[0] = 500;
$crime_exp[0] = 1;
$crime_cooldown[0] = 15;

$crime[1] = 'Hack banken til gjester på en restaurant';
$crime_chance[1] = 50;
$crime_success[1] = getOutcomeAmount($db, true, $_SESSION['ID'], 'crime', 1, 0, 0);
$crime_fails[1] = getOutcomeAmount($db, true, $_SESSION['ID'], 'crime', 1, 0, 0);
$crime_money_from[1] = 250;
$crime_money_to[1] = 1000;
$crime_exp[1] = 2;
$crime_cooldown[1] = 35;

$crime[2] = 'Blackmail en kjendis';
$crime_chance[2] = 50;
$crime_success[2] = getOutcomeAmount($db, true, $_SESSION['ID'], 'crime', 2, 0, 0);
$crime_fails[2] = getOutcomeAmount($db, true, $_SESSION['ID'], 'crime', 2, 0, 0);
$crime_money_from[2] = 500;
$crime_money_to[2] = 1500;
$crime_exp[2] = 3;
$crime_cooldown[2] = 55;

$crime[3] = 'Utfør narkotika smugling til Cuba';
$crime_chance[3] = 50;
$crime_success[3] = getOutcomeAmount($db, true, $_SESSION['ID'], 'crime', 3, 0, 0);
$crime_fails[3] = getOutcomeAmount($db, true, $_SESSION['ID'], 'crime', 3, 0, 0);
$crime_money_from[3] = 1000;
$crime_money_to[3] = 5000;
$crime_exp[3] = 4;
$crime_cooldown[3] = 80;