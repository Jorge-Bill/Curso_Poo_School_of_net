<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 15/12/17
 * Time: 18:00
 */

class Conn implements IConn
{
    private $dsn;
    private $user;
    private $pass;

    public function __construct($dsn, $user, $pass)
    {
        $this->dsn  = $dsn;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function connect()
    {
        return new PDO($this->dsn,$this->user, $this->pass);
    }
}