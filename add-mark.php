<?php
session_start();
$successMessage = "";
if(!isset($_SESSION["user_id"])){
    header("Location: index.php");
}
if(isset($_POST['regno'])){
    $query = "INSERT INTO `student_details`(`regno`, `sname`, `gender`, `bcode`, `bname`, `add1`, `add2`, `add3`, `stu_phone`, `p_name`, `p_phone`) VALUES ('".$_POST['regno']."','".$_POST['sname']."','".$_POST['gender']."','".$_POST['bcode']."','".$_POST['bname']."','".$_POST['add1']."','".$_POST['add2']."','".$_POST['add3']."','".$_POST['stu_phone']."','".$_POST['p_name']."','".$_POST['p_phone']."')";
    $con = mysqli_connect("localhost","root","","stu-project");
    mysqli_query($con, $query);
    $successMessage = "Record Added";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Mark</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <style>
        html,body{
            margin:0;
            padding:0;
            height:100%;
        }
        h1.title{
            margin:0;
            text-align:center;
        }
    </style>
</head>
<body>
<div class="container-fluid">
        <div class="row mt-3">
            <?php include("sidebar.php"); ?>
            <div class="col-10">
                <div class="row">
                    <div class="col">
                        <h1 class="title mb-3">Add Mark</h1>
                        <?php if($successMessage!==""){ ?>
                            <div class="alert alert-success" role="alert">
                            <?php echo $successMessage; ?>
                            </div>
                        <?php } ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="regno" class="form-label">Reg No</label>
                                <input class="form-control" id="regno" type="text" name="regno" />
                            </div>
                            <div class="mb-3">
                                <label for="sname" class="form-label">Student Name</label>
                                <input class="form-control" id="sname" readonly="true" type="text" name="sname" />
                            </div>
                            <div class="mb-3">
                                <label for="bcode" class="form-label">Branch Code</label>
                                <input class="form-control" readonly="true" id="bcode"  type="text" name="bcode" />
                            </div>
                            <div class="mb-3">
                                <label for="bname" class="form-label">Branch Name</label>
                                <input class="form-control" readonly="true" id="bname" type="text" name="bname"  />
                            </div>
                            <div class="mb-3">
                                <label for="sem" class="form-label">Semester</label>
                                <input class="form-control mb-1" id="sem" type="text" name="sem" />
                            </div>
                            <div>
                                <input class="btn btn-primary" type="submit" value="Add" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    jQuery(document).ready(function($){
        $("#regno").autocomplete({
            source: "search.php",
            minLength: 1,
            select: function( event, ui ) {
                $("#sname").attr("value",ui.item.sname)
                $("#bname").attr("value",ui.item.bname)
                $("#bcode").attr("value",ui.item.bcode)
            }
        })
    })
</script>
</body>
</html>