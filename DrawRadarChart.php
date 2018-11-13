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

 $cities = array();
 $cities_sql = "SELECT * FROM countries_capital_weather LIMIT 5";
 $cities_query = mysqli_query($conn,$cities_sql);
 while($city = mysqli_fetch_assoc($cities_query)){
     $cityObj = new stdClass();
     $cityObj->x = $city["name"];
     $cityObj->y = $city["fahrenheit"];
     array_push($cities,$cityObj);
 }
 $charts = array(); //create an array to hold all the chart for single result and multi results
 $radar_object = new stdClass();
 $radar_object->name="Cities Fahrenheit";
 $radar_object->fillColor = $colors[0];
 $radar_object->borderColor = $colors[2];
 $radar_object->points = $cities;

 //push object to array
 array_push($charts,$radar_object);
 $dataset = new stdClass();
 $dataset->datasets = $charts;
 echo json_encode($dataset);

 
?>