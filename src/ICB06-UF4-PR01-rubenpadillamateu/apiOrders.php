<?php 

include 'fakeResult.php';



class ApiOrders{

    function getAllResults(){
        $order  = new FakeResult();
        $orders = array();
        $orders['register'] = array();
        $result = "";
        $cmpny  = "";
        $date   = "";


        if (isset($_GET['company'])){
            
        }
        if (isset($_GET['date'])){
            
        }

        if (empty($_GET)){
            $result = $order->getOrders();
            }
            elseif(isset($_GET['date'])){
                $date = $_GET['date'];
                $result= $order->getDateOrders($date);
            }
            elseif(isset($_GET['company'])){
                $cmpny = $_GET['company'];
                //echo "ERROR: ".$cmpny;
                $result= $order->getCompanyOrders($cmpny);
            }




        if ($result->rowCount()){
            while  ($row = $result->fetch(PDO::FETCH_ASSOC)){
                $register = array(
                    'id_order'=> $row['id_order'],
                    'date'=> $row['date'],
                    'company'=> $row['company'],
                    'qty'=> $row['qty']
                );
                array_push($orders['register'], $register);
            }

            http_response_code(200);
            echo json_encode($orders);
        }else {
            http_response_code(404);
            echo json_encode(array('message' => 'Elemento no encontrado'));
        }
    }
}

$api = new ApiOrders();
$api->getAllResults();



?>
