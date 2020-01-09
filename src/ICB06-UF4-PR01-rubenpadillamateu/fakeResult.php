<?php 

include 'DBconn.php';

class FakeResult extends DBconn {

    function getOrders(){
        $result = $this->connect()->query('SELECT * FROM orders');
        return $result;
    }
    function getDateOrders($cond){
        $result = $this->connect()->query("SELECT * FROM orders WHERE date > '".$cond."'");
        return $result;
    }
    function getCompanyOrders($cond){
        $result = $this->connect()->query("SELECT * FROM orders WHERE company = '".$cond."'");
        return $result;
    }
}


?>