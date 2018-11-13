<?php
 header('Content-type: application/json');

    $imagelist = new stdClass();
    $imagelist->page = 1;
    $imagelist->totalPages = 10;
    $imagelist->toast="";

    $items = array();

    $item1 = new stdClass();
    $item1->id = 1;
    $item1->caption = "I Am Caption 1";
    $item1->subtitle="I Am Subtitle 1";
    $item1->firstName="Anne";
    $item1->lastName="Harry";
    $item1->imageSource="https://cdn.apgr.me/images/1.jpg";
    array_push($items,$item1);


    $item2 = new stdClass();
    $item2->id = 2;
    $item2->caption = "I Am Caption 2";
    $item2->subtitle="I Am Subtitle 2";
    $item2->firstName="Amy";
    $item2->lastName="Andrews";
    $item2->imageSource="https://cdn.apgr.me/images/2.jpg";
    array_push($items,$item2);


    $item3 = new stdClass();
    $item3->id = 3;
    $item3->caption = "I Am Caption 3";
    $item3->subtitle="I Am Subtitle 3";
    $item3->firstName="Claire";
    $item3->lastName="Simoes";
    $item3->imageSource="https://cdn.apgr.me/images/3.jpg";
    array_push($items,$item3);

    $item4 = new stdClass();
    $item4->id = 4;
    $item4->caption = "I Am Caption 4";
    $item4->subtitle="I Am Subtitle 4";
    $item4->firstName="Dorothy";
    $item4->lastName="Stone";
    $item4->imageSource="https://cdn.apgr.me/images/4.jpg";
    array_push($items,$item4);

    $item5 = new stdClass();
    $item5->id = 5;
    $item5->caption = "I Am Caption 5";
    $item5->subtitle="I Am Subtitle 5";
    $item5->firstName="Dorothy";
    $item5->lastName="Stone";
    $item5->imageSource="https://cdn.apgr.me/images/5.jpg";
    array_push($items,$item5);

    $imagelist->items = $items;
    
    echo json_encode($imagelist);
?>