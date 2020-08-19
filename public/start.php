<?php
/**
 * Created by PhpStorm.
 * User: rog
 * Date: 2020/8/19
 * Time: 16:00
 */
require __DIR__ . '/../vendor/autoload.php';

foreach (glob(dirname(__DIR__)."/swoole/*.php") as $file) {
   require_once $file;
}