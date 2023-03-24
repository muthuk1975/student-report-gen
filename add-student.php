<?php
session_start();
require("config.php");
$successMessage = "";
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
if(isset($_POST['regno'])){
    $query = "INSERT INTO `student_details`(`regno`, `stname`, `gender`, `bcode`, `bname`, `add1`, `add2`, `add3`, `stu_phone`, `p_name`, `p_phone`) VALUES ('".$_POST['regno']."','".$_POST['stname']."','".$_POST['gender']."','".$_POST['bcode']."','".$_POST['bname']."','".$_POST['add1']."','".$_POST['add2']."','".$_POST['add3']."','".$_POST['stu_phone']."','".$_POST['p_name']."','".$_POST['p_phone']."')";
    $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
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
  <title>Create Student</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <style>
  html,
  body {
    margin: 0;
    padding: 0;
    height: 100%;
  }

  h1.title {
    margin: 0;
    text-align: center;
  }
  </style>
</head>

<body>
  <div class="container-fluid h-100">
    <div class="row h-100">
      <?php include("sidebar.php"); ?>
      <div class="col-10 mt-3">
        <div class="row">
          <div class="col-12">
            <h2 style="text-align:center;font-size:40px;color:#00d">Online Progress Report</h2>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h1 class="title mb-3">Add Student</h1>
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
                <label for="stname" class="form-label">Student Name</label>
                <input class="form-control" id="stname" type="text" name="stname" />
              </div>
              <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <select class="form-control" id="gender" name="gender">
                  <option value="">Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="bcode" class="form-label">Branch Code</label>
                <select class="form-control" id="bcode" name="bcode">
                  <option value="">Select</option>
                  <option value="1010">1010</option>
                  <option value="1020">1020</option>
                  <option value="1030">1030</option>
                  <option value="1040">1040</option>
                  <option value="1052">1052</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="bname" class="form-label">Branch Name</label>
                <input class="form-control" readonly="true" id="bname" type="text" name="bname" />
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input class="form-control mb-1" id="address" type="text" name="add1" placeholder="Address Line 1" />
                <input class="form-control mb-1" id="address" type="text" name="add2" placeholder="Address Line 2" />
                <input class="form-control mb-1" id="address" type="text" name="add3" placeholder="Address Line 3" />
              </div>
              <div class="mb-3">
                <label for="stu_phone" class="form-label">Student Phone</label>
                <input class="form-control" id="stu_phone" type="text" name="stu_phone" />
              </div>
              <div class="mb-3">
                <label for="p_name" class="form-label">Parent Name</label>
                <input class="form-control" id="p_name" type="text" name="p_name" />
              </div>
              <div class="mb-3">
                <label for="p_phone" class="form-label">Parent Phone</label>
                <input class="form-control" id="p_phone" type="text" name="p_phone" />
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
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script>
  jQuery(document).ready(function($) {
    $("#bcode").on("change", function(e) {
      let val = ""
      switch (e.target.value) {
        case "1010":
          val = "Civil"
          break
        case "1020":
          val = "Mech"
          break
        case "1030":
          val = "EEE"
          break
        case "1040":
          val = "ECE"
          break
        case "1052":
          val = "CSE"
          break
      }
      $("#bname").attr("value", val)
    })
  })
  </script>
</body>

</html>