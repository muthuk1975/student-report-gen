<?php
require("config.php");
if(isset($_REQUEST['term'])){
    $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
    $query = "SELECT * FROM `student_details` WHERE regno LIKE '%".$_REQUEST['term']."%'";
    $result = mysqli_query($con, $query);
    $output = array();
    if($result){
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $output[$i] = $row;
            $output[$i]['label'] = $row['regno'];
            $i++;
        }
    }
    echo json_encode($output);
}
?>