<?php

// start!
// session_start();
// error_reporting(-1);
// ini_set('display_errors', 1);

// vendor
require __DIR__.'/vendor/autoload.php';

// Helpers
// https://github.com/dialogueplay/php-request-helper
// use PhpRequestHelper\Helper;
// use PhpRequestHelper\Request;
// use PhpRequestHelper\Response;

// Assert
// https://github.com/webmozart/assert
// use Webmozart\Assert\Assert;

// // Curl
// // https://github.com/php-curl-class/php-curl-class
use \Curl\Curl;
$curl = new Curl();

// // Medoo
// // https://medoo.in/
use Medoo\Medoo;

// try {
//     $db = new Medoo([
//         'database_type' => 'mysql',
//         'database_name' => 'root',
//         'server' => '127.0.0.1',
//         'username' => 'root',
//         'password' => 'root'
//     ]);
// } catch (\Throwable $th) {
//     exit($th);
// }