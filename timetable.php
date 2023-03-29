<?php
session_start();
require("config.php");
$successMessage = "";
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
$con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
if(isset($_REQUEST['sem'])){
  $timeTableQuery = "SELECT * FROM `timetable_details` WHERE `sem` = '".$_REQUEST["sem"]."' AND `bcode` = '".$_REQUEST["bcode"]."' AND `year` = '".$_REQUEST["year"]."'";
  $staffResult = mysqli_query($con, $timeTableQuery);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Timetable</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
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
            <h1 class="title mb-3">View Timetable</h1>
            <?php if($successMessage!==""){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $successMessage; ?>
            </div>
            <?php } ?>
            <form action="" method="get">
              <div class="row">
                <div class="col mb-3">
                  <label for="bcode" class="form-label">Branch Code</label>
                  <select class="form-control" id="bcode" name="bcode">
                    <option value="">Select</option>
                    <option value="1010"<?php if($_REQUEST["bcode"]=="1010"){echo " selected";} ?>>1010</option>
                    <option value="1020"<?php if($_REQUEST["bcode"]=="1020"){echo " selected";} ?>>1020</option>
                    <option value="1030"<?php if($_REQUEST["bcode"]=="1030"){echo " selected";} ?>>1030</option>
                    <option value="1040"<?php if($_REQUEST["bcode"]=="1040"){echo " selected";} ?>>1040</option>
                    <option value="1052"<?php if($_REQUEST["bcode"]=="1052"){echo " selected";} ?>>1052</option>
                  </select>
                </div>
                <div class="col mb-3">
                  <label for="sem" class="form-label">Semester</label>
                  <select class="form-control" id="sem" name="sem">
                    <option value="">Choose</option>
                    <option value="1"<?php if($_REQUEST["sem"]=="1"){echo " selected";} ?>>1</option>
                    <option value="2"<?php if($_REQUEST["sem"]=="2"){echo " selected";} ?>>2</option>
                    <option value="3"<?php if($_REQUEST["sem"]=="3"){echo " selected";} ?>>3</option>
                    <option value="4"<?php if($_REQUEST["sem"]=="4"){echo " selected";} ?>>4</option>
                    <option value="5"<?php if($_REQUEST["sem"]=="5"){echo " selected";} ?>>5</option>
                    <option value="6"<?php if($_REQUEST["sem"]=="6"){echo " selected";} ?>>6</option>
                  </select>
                </div>
                <div class="col mb-3">
                  <label for="year" class="form-label">Year</label>
                  <input class="form-control" id="year" name="year" type="number" value="<?php echo $_REQUEST["year"] ?>" />
                </div>
              </div>
              <div>
                <input class="btn btn-primary" type="submit" value="Search" />
              </div>
            </form>
            <?php if(isset($_REQUEST["sem"])): ?>
            <div class="table-responsive mt-3">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>Day/Hour</th>
                      <th>1</th>
                      <th>2</th>
                      <th>3</th>
                      <th>4</th>
                      <th>5</th>
                      <th>6</th>
                      <th>7</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($row = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){
                    $dayDetails = json_decode($row["day_details"], true);
                    ?>
                    <tr>
                      <th><?php echo $row["day"]; ?></th>
                      <?php foreach($dayDetails as $data){ ?>
                      <td>
                        <p><?php echo $data["hall"]; ?></p>  
                        <p><?php echo $data["staff"]; ?></p>
                        <p>Subject: <?php echo $data["subject"]; ?></p>
                      </td>
                      <?php } ?>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <?php  endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  jQuery(document).ready(function($) {
    $('select[name*="staff"]').on("change",function(){
      var id = (Math.random() + 1).toString(36).substring(7)
      var newElement = '<div class="mb-3 subject"><label class="form-label" for="'+id+'">Choose Subject</label><select type="text" class="form-control" name="subject_'+$(this).data("day")+'[]" id="'+id+'"><option value="">Choose Subject</option></select></div>'
      $(this).parent(".mb-3").next(".subject").remove()
      $(newElement).insertAfter($(this).parent('.mb-3'))
      console.log($(this).find(":selected").data("subjects"))
      $(this).find(":selected").data("subjects").forEach(item => {if(item.sname !== "")$("#"+id).append("<option value='"+item.scode+"'>"+item.sname+"</option>")})
    })
  })
  </script>
</body>

</html>