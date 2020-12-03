<?php

require_once(__DIR__.'/vendor/autoload.php');

use WebAndCow\Challenge\Game;

$myKey = 'PUT YOUR PRIVATE KEY HERE';
$challengeCode = 'PUT THE CHALLENGE CODE HERE';

$game = new Game($myKey, $challengeCode);
$solution = new \WebAndCow\ChallengeBootstrap\Solution();
$result = $game->resolveWith($solution);

echo $result.PHP_EOL;