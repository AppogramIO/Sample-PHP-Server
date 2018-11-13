<?php
    //check that the request must be a POST 
    require __DIR__ . '/vendor/autoload.php';
    header('Content-type: application/json');
    use \Firebase\JWT\JWT;
    include_once './db/db.php';
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input = file_get_contents("php://input");
        $body = json_decode($input,TRUE);
        if(array_key_exists("username",$body) && array_key_exists("password",$body)){
            $username = $body["username"];
            $password = $body["password"];
            
            $sql = "SELECT * FROM users where username='$username' AND password='$password'";
            $db_result = mysqli_query($conn,$sql);
            $user = mysqli_fetch_assoc($db_result);
            $token = array(
                "userId"=>$user["id"],
                "FirstName"=>$user["first_name"],
                "LastName"=>$user["last_name"],
                "PersonalCode"=>$user["personal_code"]
            );
            $jwt = JWT::encode($token,"secretKey");
            $response = new stdClass();
            $response->jwt = $jwt;
            echo json_encode($response);
            mysqli_close($conn);
    
        }
        else{
            header("HTTP/1.0 403 Invalid Username or Password");
            echo "Invalid Username or Password";
        }
    }
    else{
        header("HTTP/1.0 405 Method Not Allowed");
        echo "Invalid Username or Password";
    }
?>