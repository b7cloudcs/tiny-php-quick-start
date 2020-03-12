<?php

// start!
// session_start();
// error_reporting(-1);
// ini_set('display_errors', 1);

// vendor
require __DIR__.'/vendor/autoload.php';

// Helpers
// https://github.com/dialogueplay/php-request-helper
class Helper extends PhpRequestHelper\Helper{}
class Request extends PhpRequestHelper\Request{}
class Response extends PhpRequestHelper\Response{}

// Assert
// https://github.com/webmozart/assert
class Assert extends Webmozart\Assert\Assert{

    // my rules
    public static function __callStatic($name, $arguments)
    {
        // 中国电话号码 1qqwwwweeee
        if($name == "chineseCellphone")
        {
            if(!\preg_match('/^1[0-9]{10}$/', $arguments[0])){
                static::reportInvalidArgument(\sprintf(
                    $arguments[1] ?: 'Expected a string. Got: %s',
                    static::typeToString($arguments[0])
                ));
            }
        }

    }
}

// Curl
// https://github.com/php-curl-class/php-curl-class
$curl = new \Curl\Curl;

// // Medoo
// // https://medoo.in/
// try {
//     $db = new Medoo\Medoo([
//         'database_type' => 'mysql',
//         'database_name' => 'root',
//         'server' => '127.0.0.1',
//         'username' => 'root',
//         'password' => 'root'
//     ]);
// } catch (\Throwable $th) {
//     exit($th);
// }
