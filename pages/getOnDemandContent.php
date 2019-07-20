<?php

//    $return_array = [ [10],[6],[9],[5],[1],[3],[11],[4],[8] ];

    $return_array = [
        ["Popular 2", 10],
        ["Popular 5", 6],
        ["Popular 3", 9],
        ["Popular 6", 5],
        ["Popular 9", 1],
        ["Popular 8", 3],
        ["Popular 1", 11],
        ["Popular 7", 4],
        ["Popular 4", 8],
    ];


    $data["array"]= json_encode($return_array);
    $data["total_articles"] = 76;
    $data["total_article_views"] = 267;
    $data["total_articles_shares"] = 59;
    $data["total_articles_by_topic"] = 76;



    echo json_encode($data);
?>
