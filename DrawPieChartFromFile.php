<?php
 header('Content-type: application/json');
try{
    $barchart_json_file = file_get_contents('./Models/PieChartData.json');
    echo $barchart_json_file;
}catch(Exception $e){
    echo $e;
}
    
?>