<?php

$user_rank = [
	"Bruker",
	"Support",
	"Forum moderator",
	"Moderator",
	"Administrator",
	"Utvikler"
];

$user_rank_colors = [
	"Bruker",
	"Support",
	"Forum moderator",
	"Moderator",
	"Administrator",
	"bbf706"
];

$rankListArray = [
	"Nybegynner", 
	"Løpegutt", 
	"Kriminell", 
	"Soldat", 
	"Caporegime", 
	"Consigliere", 
	"Underboss", 
	"Boss", 
	"Gudfar", 
	"Legendarisk Gudfar", 
	"Don", 
	"Public Enemy"
];

$expFromArray = [
	0, 
	100, 
	250, 
	500, 
	1000, 
	2000, 
	4000, 
	8000, 
	16000, 
	32000, 
	64000, 
	128000
];

$expToArray = [
	100, 
	250, 
	500, 
	1000, 
	2000, 
	4000, 
	8000, 
	16000, 
	32000, 
	64000, 
	128000,
	INF
];

function getCurrentRank($expFromUser, $expToArray, $expFromArray, $rankListArray){
	$i = 0;
	while ($i < count($rankListArray)) {
		if ($expFromUser >= $expFromArray[$i] && $expFromUser < $expToArray[$i]) {
			return $i;
		}
		$i++;
	}
}

function rankProgress($expToArray, $expFromArray, $rank, $exp){
    if (!$exp || $exp == 0) {
        return 0;
    } else {
        if ($rank < 11) {
            $percent4 = $expFromArray[$rank + 1] - $exp;
            $percent5 = $expToArray[$rank] - $expFromArray[$rank + 1];
            $percent6 = ($percent4 / $percent5) * 100;
            return 100 - $percent6;
        } elseif ($rank == 11) {
            return 100;
        }
    }
}
