<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 15/12/17
 * Time: 17:27
 */

class Product
{
    private $db;

    public function __construct(IConn $db)
    {
        $this->db = $db->connect();
    }

    public function list()
    {

        $query = "SELECT * FROM products";

        $stmt = $this->db->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}