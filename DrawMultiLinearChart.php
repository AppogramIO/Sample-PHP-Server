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
     $city_farhernheit = new stdClass();
     $city_farhernheit->x = $city["name"];
     $city_farhernheit->y = $city["fahrenheit"];
     array_push($cities_farhernheit,$city_farhernheit);


     $city_celsius = new stdClass();
     $city_celsius->x = $city["name"];
     $city_celsius->y = $city["celsius"];
     array_push($cities_celsius,$city_celsius);
 }
 $charts = array(); //create an array to hold all the chart for single result and multi results
 $linear_object_1 = new stdClass();
 $linear_object_1->name="Cities Fahrenheit";
 $linear_object_1->startColor = $colors[0];
 $linear_object_1->endColor = $colors[2];
 $linear_object_1->circleColor = $colors[4];
 $linear_object_1->borderColor = $colors[6];
 $linear_object_1->points = $cities_farhernheit;


 $linear_object_2 = new stdClass();
 $linear_object_2->name="Cities Celsius";
 $linear_object_2->startColor = $colors[1];
 $linear_object_2->endColor = $colors[3];
 $linear_object_2->circleColor = $colors[5];
 $linear_object_2->borderColor = $colors[7];
 $linear_object_2->points = $cities_celsius;

 //push object to array
 array_push($charts,$linear_object_1);
 array_push($charts,$linear_object_2);

 $dataset = new stdClass();
 $dataset->datasets = $charts;
 echo json_encode($dataset);

 
?>