<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 15/12/17
 * Time: 19:01
 */

class Container
{
    public static function getProduct()
    {
        return Product(self::getConn());
    }

    public static function getConn()
    {
        return new Conn("mysql:host=127.0.0.1; dbname=teste_OO","root", "atitudephp");
    }

}