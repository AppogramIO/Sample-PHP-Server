<?php
    include_once "./db/db.php";
    header('Content-type: application/json');
    //query on database but only select 1 product
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
?>