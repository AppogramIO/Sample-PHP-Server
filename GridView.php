<?php
    header('Content-type: application/json');
    $data = array(
        array("Stone", "John", "28"),
        array("Priya", "Ponnappa", "31"),
        array("Wong", "Mia", "25"),
        array("Stanbrige ", "Peter", "25")
    );

    $GridData = new stdClass();
    $GridData->data = $data;
    echo json_encode($GridData);
?>