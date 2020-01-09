<?php 

class DBconn {
    private $host;
    private $dbname;
    private $user;
    private $password;
    public  $conn;
    private $sql; 


    public function __construct(){
        $this->host = 'localhost';
        $this->dbname = 'icb0006_uf4_pr01';
        $this->user = 'root';
        $this->password = '';
    }

    public function connect(){
        $this->conn = null;

        try{
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname,$this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'Connection failed: '. $e->getMessage();
        }
        return $this->conn;
    }

    public function insertData($date, $cmpny, $qty, $conn){
        $mssg = '';
        $sql = "INSERT INTO orders (date, company, qty)
        VALUES ('".$date."', '".$cmpny."', '".$qty."')";
        $conn = $this->connect();
        $conn->query($sql);
        //$conn->close();
        return $mssg;
        

    }

}

?>