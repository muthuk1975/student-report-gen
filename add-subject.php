<?php
session_start();
$successMessage = "";
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
if(isset($_POST['scode'])){
    $query = "INSERT INTO `sub_details`(`scode`, `sname`, `bcode`, `sem`, `year`, `scheme`) VALUES ('".$_POST['scode']."','".$_POST['sname']."','".$_POST['bcode']."','".$_POST['sem']."','".$_POST['year']."','".$_POST['scheme']."')";
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
  <title>Add Subject</title>
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
            <h1 class="title mb-3">Add Subject</h1>
            <?php if($successMessage!==""){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $successMessage; ?>
            </div>
            <?php } ?>
            <form action="" method="post">
              <div class="mb-3">
                <label for="scode" class="form-label">Subject Code</label>
                <input class="form-control" id="scode" type="text" name="scode" />
              </div>
              <div class="mb-3">
                <label for="sname" class="form-label">Subject Name</label>
                <input class="form-control" id="sname" type="text" name="sname" />
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
                <label for="sem" class="form-label">Semster</label>
                <select class="form-control" id="sem" name="sem">
                  <option value="">Choose</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <select class="form-control" id="year" name="year">
                  <option value="">Choose</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="scheme" class="form-label">Scheme</label>
                <select class="form-control" id="scheme" name="scheme">
                  <option value="">Choose</option>
                  <option value="L">L</option>
                  <option value="M">M</option>
                  <option value="N">N</option>
                </select>
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