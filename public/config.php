<?php

use Pimple\Container;

$container = new Container();

$container['dns']   = "mysql:host=127.0.0.1; dbname=teste_OO";
$container['user']  = "root";
$container['pass']  = "atitudephp";