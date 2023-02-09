<?php

$gta[0] = 'Stjel en bil fra fellesparkeringer';
$gta_chance[0] = 55;
$gta_success[0] = getOutcomeAmount($db, true, $_SESSION['ID'], 'gta', 0, 0, 0);
$gta_fails[0] = getOutcomeAmount($db, false, $_SESSION['ID'], 'gta', 0, 0, 0);
$gta_money_from[0] = 1;
$gta_money_to[0] = 50000;
$gta_exp[0] = 2;
$gta_cooldown[0] = 120;

$gta[1] = 'Stjel en bil fra bilforhandler';
$gta_chance[1] = 55;
$gta_success[1] = getOutcomeAmount($db, true, $_SESSION['ID'], 'gta', 1, 0, 0);
$gta_fails[1] = getOutcomeAmount($db, false, $_SESSION['ID'], 'gta', 1, 0, 0);
$gta_money_from[1] = 1;
$gta_money_to[1] = 50000;
$gta_exp[1] = 2;
$gta_cooldown[1] = 120;

$gta[2] = 'Stjel en bil fra luksus bilforhandler';
$gta_chance[2] = 55;
$gta_success[2] = getOutcomeAmount($db, true, $_SESSION['ID'], 'gta', 2, 0, 0);
$gta_fails[2] = getOutcomeAmount($db, false, $_SESSION['ID'], 'gta', 2, 0, 0);
$gta_money_from[2] = 1;
$gta_money_to[2] = 50000;
$gta_exp[2] = 2;
$gta_cooldown[2] = 120;
