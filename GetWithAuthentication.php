<?php
    require __DIR__ . '/vendor/autoload.php';
    use \Firebase\JWT\JWT;
    include_once './db/db.php';
    header('Content-type: application/json');
    $headers = getallheaders();
    if(isset($headers["authorization"])){
        $token =explode(" ",$headers["authorization"])[1]; //extract Bearer from token
        try{
            $isValid = JWT::decode($token,"secretKey",array('HS256'));
            $sql = "SELECT * from products LIMIT 1"; 
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    //create a assosiated array to shape like a json in .appo file
    
    //we need a json liker {"ProductId":10,"ProductName":"Laptop","Price":100}
    $product["ProductId"] = $row["id"];
    $product["ProductName"]=$row["name"];
    $product["Price"]=$row["price"];
    echo json_encode($product);
    mysqli_close($conn);
        }
        catch (Exception $e){
            header("HTTP/1.0 403 Invalid autorization");
            echo "Invalid autorization";
        }
        
    }
    else{
        header("HTTP/1.0 403 Missing autorization header");
            echo "Missing autorization header";
    }
?>