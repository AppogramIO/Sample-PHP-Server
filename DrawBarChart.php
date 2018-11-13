<?php 
    include_once './db/db.php';
    header('Content-type: application/json');


    $colors_sql = "SELECT value FROM colors"; 
    $colors_query = mysqli_query($conn,$colors_sql);
    $colors = array();
    while($c = mysqli_fetch_assoc($colors_query)){
        array_push($colors,$c["value"]); //just select value of colors in db
    }
    shuffle($colors); //randomize colors

    $countries = array();
    $countries_sql = "SELECT * FROM countries_population";
    $countries_query = mysqli_query($conn,$countries_sql);
    while($country = mysqli_fetch_assoc($countries_query)){
        $countryObj = new stdClass();
        $countryObj->x = $country["name"];
        $countryObj->y = $country["population"];
        array_push($countries,$countryObj);
    }
    $charts = array(); //create an array to hold all the chart for single result and multi results
    $barchart_object = new stdClass();
    $barchart_object->name="set1";
    $barchart_object->setColor=$colors;
    $barchart_object->points = $countries;

    //push object to array
    array_push($charts,$barchart_object);

    $result = new stdClass();
    $result->datasets = $charts;
    
    echo json_encode($result);

    
?>