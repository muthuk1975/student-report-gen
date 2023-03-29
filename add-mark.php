<?php
session_start();
require("config.php");
$successMessage = "";
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
else{
  $query = "SELECT * FROM `student_details`";
  $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
  $result = mysqli_query($con, $query);
}
if(isset($_POST['regno'])){
  if(isset($_POST['subcode_1'])){
    if($_POST['mark_1'] >= 0){
      $mark1 = $_POST['mark_1'];
      $sub1 = $_POST['sub_1'];
      $subcode1 = $_POST['subcode_1'];
    }else{
      $mark1 = -1;
      $sub1 = $_POST['sub_1'];
      $subcode1 = $_POST['subcode_1'];
    }
  }else{
    $mark1 = 0;
    $sub1 = "";
    $subcode1 = "";
  }
  if(isset($_POST['subcode_2'])){
    if($_POST['mark_2'] >= 0){
      $mark2 = $_POST['mark_2'];
      $sub2 = $_POST['sub_2'];
      $subcode2 = $_POST['subcode_2'];
    }else{
      $mark2 = -1;
      $sub2 = $_POST['sub_2'];
      $subcode2 = $_POST['subcode_2'];
    }
  }else{
    $mark2 = 0;
    $sub2 = "";
    $subcode2 = "";
  }
  if(isset($_POST['subcode_3'])){
    if($_POST['mark_3'] >= 0){
      $mark3 = $_POST['mark_3'];
      $sub3 = $_POST['sub_3'];
      $subcode3 = $_POST['subcode_3'];
    }else{
      $mark3 = -1;
      $sub3 = $_POST['sub_3'];
      $subcode3 = $_POST['subcode_3'];
    }
  }else{
    $mark3 = 0;
    $sub3 = "";
    $subcode3 = "";
  }
  if(isset($_POST['subcode_4']) && $_POST['subcode_4'] !== ""){
    if($_POST['mark_4'] >= 0){
      $mark4 = $_POST['mark_4'];
      $sub4 = $_POST['sub_4'];
      $subcode4 = $_POST['subcode_4'];
    }else{
      $mark4 = -1;
      $sub4 = $_POST['sub_4'];
      $subcode4 = $_POST['subcode_4'];
    }
  }else{
    $mark4 = 0;
    $sub4 = "";
    $subcode4 = "";
  }
  if(isset($_POST['subcode_5']) && $_POST['subcode_5'] !== ""){
    if($_POST['mark_5'] >= 0){
      $mark5 = $_POST['mark_5'];
      $sub5 = $_POST['sub_5'];
      $subcode5 = $_POST['subcode_5'];
    }else{
      $mark5 = -1;
      $sub5 = $_POST['sub_5'];
      $subcode5 = $_POST['subcode_5'];
    }
  }else{
    $mark5 = 0;
    $sub5 = "";
    $subcode5 = "";
  }
  $total = ($mark1 >=0 ? $mark1 : 0) + ($mark2 >=0 ? $mark2 : 0) + ($mark3 >=0 ? $mark3 : 0) + ($mark4 >=0 ? $mark4 : 0) + ($mark5 >=0 ? $mark5 : 0);
  $result = "FAIL";
  if($_POST['e_type'] === "Model"){
    if(isset($_POST['subcode_5']) && $_POST['subcode_5'] !== ""){
      if($_POST['mark_1'] >= 30 && $_POST['mark_2'] >= 30 && $_POST['mark_3'] >= 30 && $_POST['mark_4'] >= 30 && $_POST['mark_5'] >= 30){
        $result = "PASS";
      }
      $markPercentage = $total / 5;
    }else if(isset($_POST['subcode_4']) && $_POST['subcode_4'] !== ""){
      if($_POST['mark_1'] >= 30 && $_POST['mark_2'] >= 30 && $_POST['mark_3'] >= 30 && $_POST['mark_4'] >= 30){
        $result = "PASS";
      }
      $markPercentage = $total / 4;
    }else{
      if($_POST['mark_1'] >= 30 && $_POST['mark_2'] >= 30 && $_POST['mark_3'] >= 30){
        $result = "PASS";
      }
      $markPercentage = $total / 3;
    }      
  }else if($_POST['e_type'] === "IA1" || $_POST['e_type'] === "IA2"){
    if(isset($_POST['subcode_5']) && $_POST['subcode_5'] !== ""){
      if($_POST['mark_1'] >= 20 && $_POST['mark_2'] >= 20 && $_POST['mark_3'] >= 20 && $_POST['mark_4'] >= 20 && $_POST['mark_5'] >= 20){
        $result = "PASS";
      }
      $markPercentage = $total / 5;
    }else if(isset($_POST['subcode_4']) && $_POST['subcode_4'] !== ""){
      if($_POST['mark_1'] >= 20 && $_POST['mark_2'] >= 20 && $_POST['mark_3'] >= 20 && $_POST['mark_4'] >= 20){
        $result = "PASS";
      }
      $markPercentage = $total / 4;
    }else{
      if($_POST['mark_1'] >= 20 && $_POST['mark_2'] >= 20 && $_POST['mark_3'] >= 20){
        $result = "PASS";
      }
      $markPercentage = $total / 3;
    }
  }
  $uniqueid = $_POST["regno"]."_".$_POST["bcode"]."_".$_POST["sem"]."_".$_POST["e_type"]."_".$_POST["year"];
  $query = "INSERT INTO `mark_details`(`regno`, `uniqueid`, `stname`, `bcode`, `bname`, `sem`, `sub_1`, `subcode_1`, `sub_2`, `subcode_2`, `sub_3`, `subcode_3`, `sub_4`, `subcode_4`, `sub_5`, `subcode_5`, `mark_1`, `mark_2`, `mark_3`, `mark_4`, `mark_5`, `total`, `result`, `m_per`, `att_per`, `att_date`, `e_type`, `month`, `year`, `remarks`) VALUES ('".$_POST['regno']."','".$uniqueid."','".$_POST['sname']."','".$_POST['bcode']."','".$_POST['bname']."','".$_POST['sem']."','".$sub1."','".$subcode1."','".$sub2."','".$subcode2."','".$sub3."','".$subcode3."','".$sub4."','".$subcode4."','".$sub5."','".$subcode5."','".$mark1."','".$mark2."','".$mark3."','".$mark4."','".$mark5."','".$total."','".$result."','".$markPercentage."','".$_POST['att_per']."','".$_POST['att_date']."','".$_POST['e_type']."','".$_POST['month']."','".$_POST['year']."', '".$_POST['remarks']."')";
  try{
    $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
    mysqli_query($con, $query);
    $successMessage = "Record Added";
  }catch(mysqli_sql_exception $e){
    $errorMessage = "Error: ".$e->getMessage();
  }
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

  #initHide,.subwrapper {
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
            <?php if($errorMessage!==""){ ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $errorMessage; ?>
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
                <div class="row subwrapper" id="wrapper-sub1">
                  <div class="col mb-3">
                    <label for="sub1" class="form-label">Subject 1</label>
                    <input type="text" readonly class="form-control mb-1 subject" id="sub1" type="text" name="sub_1" />
                  </div>
                  <div class="col mb-3">
                    <label for="sub1-code" class="form-label">Subject 1 Code</label>
                    <input class="form-control mb-1 subject-code" id="sub1-code" type="text" readonly name="subcode_1" />
                  </div>
                  <div class="col mb-3">
                    <label for="mark1" class="form-label">Mark 1</label>
                    <input class="form-control mb-1" id="mark1" type="number" max="100" name="mark_1" />
                    <label>Absent <input type="checkbox" id="attd1" /></label>
                  </div>
                </div>
                <div class="row subwrapper" id="wrapper-sub2">
                  <div class="col mb-3">
                    <label for="sub2" class="form-label">Subject 2</label>
                    <input type="text" readonly class="form-control mb-1 subject" id="sub2" type="text" name="sub_2" />
                  </div>
                  <div class="col mb-3">
                    <label for="sub2-code" class="form-label">Subject 2 Code</label>
                    <input class="form-control mb-1 subject-code" id="sub2-code" type="text" readonly name="subcode_2" />
                  </div>
                  <div class="col mb-3">
                    <label for="mark2" class="form-label">Mark 2</label>
                    <input class="form-control mb-1" id="mark2" type="number" max="100" name="mark_2" />
                    <label>Absent <input type="checkbox" id="attd2" /></label>
                  </div>
                </div>
                <div class="row subwrapper" id="wrapper-sub3">
                  <div class="col mb-3">
                    <label for="sub3" class="form-label">Subject 3</label>
                    <input type="text" readonly class="form-control mb-1 subject" id="sub3" type="text" name="sub_3" />
                  </div>
                  <div class="col mb-3">
                    <label for="sub3" class="form-label">Subject 3 Code</label>
                    <input class="form-control mb-1 subject-code" id="sub3-code" type="text" readonly name="subcode_3" />
                  </div>
                  <div class="col mb-3">
                    <label for="mark3" class="form-label">Mark 3</label>
                    <input class="form-control mb-1" id="mark3" type="number" max="100" name="mark_3" />
                    <label>Absent <input type="checkbox" id="attd3" /></label>
                  </div>
                </div>
                <div class="row subwrapper" id="wrapper-sub4">
                  <div class="col mb-3">
                    <label for="sub4" class="form-label">Subject 4</label>
                    <input type="text" readonly class="form-control mb-1 subject" id="sub4" type="text" name="sub_4" />
                  </div>
                  <div class="col mb-3">
                    <label for="sub4" class="form-label">Subject 4 Code</label>
                    <input class="form-control mb-1 subject-code" id="sub4-code" type="text" readonly name="subcode_4" />
                  </div>
                  <div class="col mb-3">
                    <label for="mark4" class="form-label">Mark 4</label>
                    <input class="form-control mb-1" id="mark4" type="number" max="100" name="mark_4" />
                    <label>Absent <input type="checkbox" id="attd4" /></label>
                  </div>
                </div>
                <div class="row subwrapper" id="wrapper-sub5">
                  <div class="col mb-3">
                    <label for="sub5" class="form-label">Subject 5</label>
                    <input type="text" readonly class="form-control mb-1 subject" id="sub5" type="text" name="sub_5" />
                  </div>
                  <div class="col mb-3">
                    <label for="sub5" class="form-label">Subject 5 Code</label>
                    <input class="form-control mb-1 subject-code" id="sub5-code" type="text" readonly name="subcode_5" />
                  </div>
                  <div class="col mb-3">
                    <label for="mark5" class="form-label">Mark 5</label>
                    <input class="form-control mb-1" id="mark5" type="number" max="100" name="mark_5" />
                    <label>Absent <input type="checkbox" id="attd5" /></label>
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
      $(".subject").attr("value", "")
      $(".subject-code").attr("value", "")
      $(".subwrapper").css("display","none")
      $.get("search-subject.php?bcode=" + $("#bcode").attr("value") + "&sem=" + $(this).find(":selected").attr(
          "value"),
        function(
          data, status) {
          JSON.parse(data).forEach(function(item, i) {
            var currentKey = i + 1
            $("#sub"+currentKey).attr("value", item.sname)
            $("#sub"+currentKey+"-code").attr("value", item.scode)
            $("#wrapper-sub"+currentKey).css("display","flex")
          }) 
        })
    })
    $("#attd1").on("change", function(){
      if($(this).prop("checked")){
        $("#mark1").attr("readonly",true).val("-1")
      }else{
        $("#mark1").attr("readonly",false).val("")
      }
    })
    $("#attd2").on("change", function(){
      if($(this).prop("checked")){
        $("#mark2").attr("readonly",true).val("-1")
      }else{
        $("#mark2").attr("readonly",false).val("")
      }
    })
    $("#attd3").on("change", function(){
      if($(this).prop("checked")){
        $("#mark3").attr("readonly",true).val("-1")
      }else{
        $("#mark3").attr("readonly",false).val("")
      }
    })
    $("#attd4").on("change", function(){
      if($(this).prop("checked")){
        $("#mark4").attr("readonly",true).val("-1")
      }else{
        $("#mark4").attr("readonly",false).val("")
      }
    })
    $("#attd5").on("change", function(){
      if($(this).prop("checked")){
        $("#mark5").attr("readonly",true).val("-1")
      }else{
        $("#mark5").attr("readonly",false).val("")
      }
    })
    /* $("#sub1,#sub2,#sub3,#sub4").on("change", function() {
      $("#" + $(this).attr("id") + "-code").attr("value", $(this).find(":selected").attr("data-scode"))
    }) */
  })
  </script>
</body>

</html>