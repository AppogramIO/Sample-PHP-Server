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

$cities_sql = "SELECT * FROM countries_capital_weather";
$countries_query = mysqli_query($conn,$cities_sql);
while($city = mysqli_fetch_assoc($countries_query)){
    $city_celsius = new stdClass();
    $city_celsius->x = $city["name"];
    $city_celsius->y = $city["celsius"];
    array_push($cities_celsius, $city_celsius);

    $city_fahrenheit = new stdClass();
    $city_fahrenheit->x = $city["name"];
    $city_fahrenheit->y = $city["fahrenheit"];
    array_push($cities_farhernheit, $city_fahrenheit);
}
$charts = array(); //create an array to hold all the chart for single result and multi results


$barchart_object_1 = new stdClass();
$barchart_object_1->name="City Celsius";
$barchart_object_1->setColor=$colors;
$barchart_object_1->points = $cities_celsius;

shuffle($colors);
$barchart_object_2 = new stdClass();
$barchart_object_2->name="City Fahrenheit";
$barchart_object_2->setColor=$colors;
$barchart_object_2->points = $cities_farhernheit;

//push object to array
array_push($charts,$barchart_object_1);
array_push($charts,$barchart_object_1);

$result = new stdClass();
$result->datasets = $charts;

echo json_encode($result);






?>