<?php

// bootstrap
require __DIR__.'/bootstrap.php';

// uses
use PhpRequestHelper\Helper;
use PhpRequestHelper\Request;
use PhpRequestHelper\Response;
use Webmozart\Assert\Assert;

var_dump(Helper::valueFilter(null, "default value"));
var_dump(Helper::valueBoolFilter("false"));
var_dump(Helper::valueBoolFilter("0"));

var_dump(Request::get("name", "default name"));

// Response::json(["hello"=>"world"]);

try {
    Assert::email("123@qq.com", '123@qq.com邮件地址不正确');
} catch (\InvalidArgumentException $iae) {
    Response::json(["msg"=>$iae->getMessage()]);
}

try {
    Assert::email("123qq.com", '123qq.com邮件地址不正确');
} catch (\InvalidArgumentException $iae) {
    Response::json(["msg"=>$iae->getMessage()]);
}