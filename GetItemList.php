<?php
    header('Content-type: application/json');
    parse_str($_SERVER["QUERY_STRING"],$queries); 
    
    $data = new stdClass();
    $data->page = $queries['pageindex'];
    $data->totalPage = 10;
    $data->toast = "test";

    $items = array();
    $index = ((int)$queries['pageindex']-1)*(int)$queries['pagesize'];
    $j = 0;
    for($i = 0; $i <$queries['pagesize'];$i++ ){
        $j = ++$index;
        $item = new stdClass();
        $item->id = $j."";
        $item->description = "description ".$j;
        $item->left = "left ".$j;
        $item->right="right ".$j;
        $item->title="title ".$j;
        $item->imageIcon="http://api.androidhive.info/images/glide/medium/dory.jpg";

        array_push($items,$item);
    }
    $data->items = $items;
    echo json_encode($data);

?>