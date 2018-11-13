<?php
 include_once './db/db.php';
 header('Content-type: application/json');
 header("Accept: application/json");
if($_SERVER["REQUEST_METHOD"] == "POST"){
     $input = file_get_contents("php://input");
     $body = json_decode($input,TRUE);
     $sql = "SELECT * from products WHERE id ='".mysqli_real_escape_string($conn,$body['ProductId'])."'"; 
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_assoc($result);
     //create a assosiated array to shape like a json in .appo file
     
     //we need a json liker {"ProductId":10,"ProductName":"Laptop","Price":100}
     $product = new stdClass();
     $product -> ProductId  = $row["id"];
     $product -> ProductName = $row["name"];
     $product -> Price=$row["price"];
     echo json_encode($product);
     mysqli_close($conn);
}
?>