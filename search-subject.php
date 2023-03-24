<?php
if(isset($_REQUEST['sem'])){
    $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
    $output = array();
    $query = "SELECT * FROM `sub_details` WHERE `bcode` = '".$_REQUEST['bcode']."' AND `sem` = '".$_REQUEST['sem']."'";
    $result = mysqli_query($con, $query);
    if($result){
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
            $output[$i] = $row;
            $i++;
        }
    }
    echo json_encode($output);
}
?>