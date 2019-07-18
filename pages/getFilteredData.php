<?php

$page_no = $_POST['page_no'];

$filtered_records = array(
    array("Himanshu Yadav1",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav2",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav3",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav4",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav5",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav6",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav7",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav8",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav9",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav10",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav11",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav12",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav13",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav14",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav15",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),
    array("Himanshu Yadav16",array("PHP","JAVA"),"Software Developer","JTG","08/07/2019","1"),

);


$data["filtered_items"]="";
$total_records=15;


for ($i = ($page_no-1)*10; $i < min($page_no*10,count($filtered_records)); $i++) {
    $data["filtered_items"] .= " <div class='row'>";
    for ($j = 0; $j < count($filtered_records[0]); $j++) {
        if ($j == 1) {
            $str = "";
            for ($k = 0; $k < count($filtered_records[0][$j]); $k++) {
                $str = $str . $filtered_records[0][$j][$k];

                if ($k != count($filtered_records[0][$j]) - 1)
                    $str = $str . " | ";

            }
            $data["filtered_items"] = $data["filtered_items"]."<div class='col-2'> " . $str . "</div>";
        } else {
            $data["filtered_items"] = $data["filtered_items"]."<div class='col-2'> " . $filtered_records[$i][$j] . "</div>";

        }
    }
    $data["filtered_items"] = $data["filtered_items"]."</div>";
}

$data["total_records"] = $total_records;

echo json_encode($data);


?>