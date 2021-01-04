<?php

//use to fecth prodcut data
class Product
{
public $db = null;

public function __construct(DBController $db)
{
    if(!isset($db->con))return null;
    $this->db=$db;
}

//fetch product data using getData Method
public function getData($table = 'product'){
    $result = $this->db->con->query("SELECT * FROM {$table}");

    $resultArray = array();

    // fetch product data one by one
    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        $resultArray[] = $item;
    }

    return $resultArray;
}

//get product usinsg item id
public function getProduct($item_id=null,$table='product'){
    if(isset($item_id)){
        $sql = "SELECT * FROM {$table} WHERE item_id=$item_id";
        $result = mysqli_query($this->db->con,$sql);

        $resultArray=array();

        //fetch product data one by one
        while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }
        return $resultArray;
    }
}
}