<?php
session_start();
$successMessage = "";
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
else{
  $query = "SELECT * FROM `student_details`";
  $con = mysqli_connect("localhost","root","","stu-project");
  $result = mysqli_query($con, $query);
}
if(isset($_POST['regno'])){
    $total = $_POST['mark_1'] + $_POST['mark_2'] + $_POST['mark_3'] + $_POST['mark_4'];
    $result = "FAIL";
    if($_POST['e_type'] === "Model"){
      if($_POST['mark_1'] >= 30 && $_POST['mark_2'] >= 30 && $_POST['mark_3'] >= 30 && $_POST['mark_4'] >= 30){
        $result = "PASS";
      }
      $markPercentage = $total / 4;
    }else if($_POST['e_type'] === "IA1" || $_POST['e_type'] === "IA2"){
      if($_POST['mark_1'] >= 20 && $_POST['mark_2'] >= 20 && $_POST['mark_3'] >= 20 && $_POST['mark_4'] >= 20){
        $result = "PASS";
      }
      $markPercentage = $total / 4;
    }
    $query = "INSERT INTO `mark_details`(`regno`, `stname`, `bcode`, `bname`, `sem`, `sub_1`, `subcode_1`, `sub_2`, `subcode_2`, `sub_3`, `subcode_3`, `sub_4`, `subcode_4`, `mark_1`, `mark_2`, `mark_3`, `mark_4`, `total`, `result`, `m_per`, `att_per`, `att_date`, `e_type`, `month`, `year`, `remarks`) VALUES ('".$_POST['regno']."','".$_POST['sname']."','".$_POST['bcode']."','".$_POST['bname']."','".$_POST['sem']."','".$_POST['sub_1']."','".$_POST['subcode_1']."','".$_POST['sub_2']."','".$_POST['subcode_2']."','".$_POST['sub_3']."','".$_POST['subcode_3']."','".$_POST['sub_4']."','".$_POST['subcode_4']."','".$_POST['mark_1']."','".$_POST['mark_2']."','".$_POST['mark_3']."','".$_POST['mark_4']."','".$total."','".$result."','".$markPercentage."','".$_POST['att_per']."','".$_POST['att_date']."','".$_POST['e_type']."','".$_POST['month']."','".$_POST['year']."', '".$_POST['remarks']."')";
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

  #initHide {
    display: none
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
            <h1 class="title mb-3">Add Student Mark</h1>
            <?php if($successMessage!==""){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $successMessage; ?>
            </div>
            <?php } ?>
            <form action="" method="post">
              <div class="row">
                <div class="col mb-3">
                  <label for="regno" class="form-label">Reg No</label>
                  <input class="form-control" id="regno" type="text" name="regno" />
                </div>
                <div class="col mb-3">
                  <label for="sname" class="form-label">Student Name</label>
                  <input class="form-control" id="sname" readonly="true" type="text" name="sname" />
                </div>
              </div>
              <div class="row">
                <div class="col mb-3">
                  <label for="bcode" class="form-label">Branch Code</label>
                  <input class="form-control" readonly="true" id="bcode" type="text" name="bcode" />
                </div>
                <div class="col mb-3">
                  <label for="bname" class="form-label">Branch Name</label>
                  <input class="form-control" readonly="true" id="bname" type="text" name="bname" />
                </div>
              </div>
              <div id="initHide">
                <div class="row">
                  <div class="col mb-3">
                    <label for="sem" class="form-label">Semester</label>
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
                  <div class="col mb-3">
                    <label for="month" class="form-label">Month</label>
                    <select class="form-control mb-1" id="month" type="text" name="month">
                      <option value="">Choose the month of exam</option>
                      <option value="January">January</option>
                      <option value="February">February</option>
                      <option value="March">March</option>
                      <option value="April">April</option>
                      <option value="May">May</option>
                      <option value="June">June</option>
                      <option value="July">July</option>
                      <option value="August">August</option>
                      <option value="September">September</option>
                      <option value="October">October</option>
                      <option value="November">November</option>
                      <option value="December">December</option>
                    </select>
                  </div>
                  <div class="col mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input class="form-control" id="year" name="year" type="number" />
                  </div>
                  <div class="col mb-3">
                    <label for="e_type" class="form-label">Exam Type</label>
                    <select class="form-control mb-1" id="e_type" name="e_type">
                      <option value="">Select Exam Type</option>
                      <option value="IA1">Internal Assesment Test 1</option>
                      <option value="IA2">Internal Assesment Test 2</option>
                      <option value="Model">Model Exam</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <label for="sub1" class="form-label">Subject 1</label>
                    <select class="form-control mb-1" id="sub1" type="text" name="sub_1">
                      <option value="">Select a Subject</option>
                    </select>
                  </div>
                  <div class="col mb-3">
                    <label for="sub1-code" class="form-label">Subject 1 Code</label>
                    <input class="form-control mb-1" id="sub1-code" type="text" readonly name="subcode_1" />
                  </div>
                  <div class="col mb-3">
                    <label for="mark1" class="form-label">Mark 1</label>
                    <input class="form-control mb-1" id="mark1" type="number" max="100" name="mark_1" />
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <label for="sub2" class="form-label">Subject 2</label>
                    <select class="form-control mb-1" id="sub2" type="text" name="sub_2">
                      <option value="">Select a Subject</option>
                    </select>
                  </div>
                  <div class="col mb-3">
                    <label for="sub2-code" class="form-label">Subject 2 Code</label>
                    <input class="form-control mb-1" id="sub2-code" type="text" readonly name="subcode_2" />
                  </div>
                  <div class="col mb-3">
                    <label for="mark2" class="form-label">Mark 2</label>
                    <input class="form-control mb-1" id="mark2" type="number" max="100" name="mark_2" />
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <label for="sub3" class="form-label">Subject 3</label>
                    <select class="form-control mb-1" id="sub3" type="text" name="sub_3">
                      <option value="">Select a Subject</option>
                    </select>
                  </div>
                  <div class="col mb-3">
                    <label for="sub3" class="form-label">Subject 3 Code</label>
                    <input class="form-control mb-1" id="sub3-code" type="text" readonly name="subcode_3" />
                  </div>
                  <div class="col mb-3">
                    <label for="mark3" class="form-label">Mark 3</label>
                    <input class="form-control mb-1" id="mark3" type="number" max="100" name="mark_3" />
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <label for="sub4" class="form-label">Subject 4</label>
                    <select class="form-control mb-1" id="sub4" type="text" name="sub_4">
                      <option value="">Select a Subject</option>
                    </select>
                  </div>
                  <div class="col mb-3">
                    <label for="sub4" class="form-label">Subject 4 Code</label>
                    <input class="form-control mb-1" id="sub4-code" type="text" readonly name="subcode_4" />
                  </div>
                  <div class="col mb-3">
                    <label for="mark4" class="form-label">Mark 4</label>
                    <input class="form-control mb-1" id="mark4" type="number" max="100" name="mark_4" />
                  </div>
                </div>
                <div class="row">
                  <div class="col mb-3">
                    <label for="att_per" class="form-label">Attendance Percentage</label>
                    <input class="form-control mb-1" id="att_per" type="number" max="100" name="att_per" />
                  </div>
                  <div class="col mb-3">
                    <label for="att_date" class="form-label">Attendance Date</label>
                    <input class="form-control mb-1" id="att_date" type="date" name="att_date" />
                  </div>
                </div>
                <div class="mb-3">
                  <label for="remarks" class="form-label">Remarks</label>
                  <textarea class="form-control mb-1" id="remarks" name="remarks"></textarea>
                </div>
                <div>
                  <input class="btn btn-primary" type="submit" value="Add" />
                </div>
              </div>
            </form>
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
    $("#regno").autocomplete({
      source: "search-student.php",
      minLength: 1,
      select: function(event, ui) {
        $("#sname").attr("value", ui.item.stname)
        $("#bname").attr("value", ui.item.bname)
        $("#bcode").attr("value", ui.item.bcode)
        $("#initHide").show()
      }
    })
    $("#sem").on("change", function() {
      $.get("search-subject.php?bcode=" + $("#bcode").attr("value") + "&sem=" + $(this).find(":selected").attr(
          "value"),
        function(
          data, status) {
          JSON.parse(data).forEach(function(item) {
            $("#sub1,#sub2,#sub3,#sub4").append('<option value="' + item.sname + '" data-scode="' +
              item.scode + '">' + item
              .sname +
              '</option>')
          })
        })
    })
    $("#sub1,#sub2,#sub3,#sub4").on("change", function() {
      $("#" + $(this).attr("id") + "-code").attr("value", $(this).find(":selected").attr("data-scode"))
    })
  })
  </script>
</body>

</html>