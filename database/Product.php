<?php

// Use to fecth product data
class Product
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db =$db;
    }

    // Fecth product data using getData Method
    public function getData($table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    // get product using item_id
    public function getProduct($item_id = null, $table = 'product')
    {
        $result = $this->db->con->query("SELECT * FROM ($table) WHERE item_id = {$item_id}");

        $resultArray = array();

        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}












?>