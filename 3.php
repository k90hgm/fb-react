<?php
/*
      Cảm ơn đặc biệt đến: 
             https://github.com/tomiashari/fb-autoreaction
             https://github.com/dfmcvn/getFBtoken
             https://github.com/tro1d/bot-reaction-gettoken
*/
//////UPLOADED BY K90 HACK GAME MOBILE//////
echo "\033[1;34m   _______      ___  _______  ___________ \n";
echo "\BOT AUTO FACEBOOK\n";


echo "\033[1m";
require_once('lib/fb.php');

include 'lib/config.php';
$token = file_get_contents("token.txt");
$config['cookie_file'] = 'cookie.txt';
if (!file_exists($config['cookie_file'])) {
    $fp = @fopen($config['cookie_file'], 'w');
    @fclose($fp);
}

$reaction = new Reaction();
$reaction->send_reaction($user, $pass, $token, $r_male, $r_female, $max_status);
