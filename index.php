<?php

require_once(__DIR__.'/vendor/autoload.php');

use WebAndCow\Challenge\Game;

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$game = new Game($_ENV['WEBANDCOW_API_KEY'], $_ENV['WEBANDCOW_CHALLENGE_CODE']);
$solution = new \WebAndCow\ChallengeBootstrap\Solution();
$result = $game->resolveWith($solution);

echo $result.PHP_EOL;