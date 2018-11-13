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

 $cities_celsius = array();
$cities_farhernheit = array();

 $cities_sql = "SELECT * FROM countries_capital_weather LIMIT 5";
 $cities_query = mysqli_query($conn,$cities_sql);
 while($city = mysqli_fetch_assoc($cities_query)){
     $city_fahrenheit = new stdClass();
     $city_fahrenheit->x = $city["name"];
     $city_fahrenheit->y = $city["fahrenheit"];
     array_push($cities_farhernheit,$city_fahrenheit);

     $city_celsius = new stdClass();
     $city_celsius->x = $city["name"];
     $city_celsius->y = $city["celsius"];
     array_push($cities_celsius,$city_celsius);
 }
 $charts = array(); //create an array to hold all the chart for single result and multi results
 $radar_object_1 = new stdClass();
 $radar_object_1->name="Cities Fahrenheit";
 $radar_object_1->fillColor = $colors[0];
 $radar_object_1->borderColor = $colors[2];
 $radar_object_1->points = $cities_farhernheit;

 $radar_object_2 = new stdClass();
 $radar_object_2->name="Cities Celsius";
 $radar_object_2->fillColor = $colors[1];
 $radar_object_2->borderColor = $colors[3];
 $radar_object_2->points = $cities_celsius;

 //push object to array
 array_push($charts,$radar_object_1);
 array_push($charts,$radar_object_2);

 $dataset = new stdClass();
 $dataset->datasets = $charts;
 echo json_encode($dataset);

 
?>