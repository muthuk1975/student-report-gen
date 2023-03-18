<?php
session_start();
$successMessage = "";
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}else if(isset($_REQUEST['period'])){
  $period = $_REQUEST['period'];
  switch($_REQUEST['type']){
    case "Odd":
      $type1 = "1";
      $type2 = "3";
      $type3 = "5";
      break;
    default:
      $type1 = "2";
      $type2 = "4";
      $type3 = "6";
  }
  $overallQuery = "SELECT (SELECT count(*) FROM `mark_details` WHERE `year` = ".$period." AND `sem` = ".$type1." AND `e_type` = '".$_REQUEST['e_type']."' AND `bcode` = md.bcode) total_students_1, (SELECT count(*) FROM `mark_details` WHERE `year` = ".$period." AND `result` = 'PASS' AND `sem` = ".$type1." AND `e_type` = '".$_REQUEST['e_type']."' AND `bcode` = md.bcode) as passed_students_1, (SELECT count(*) FROM `mark_details` WHERE `year` = ".$period." AND `result` = 'FAIL' AND `sem` = ".$type1." AND `e_type` = '".$_REQUEST['e_type']."' AND `bcode` = md.bcode) as failed_students_1, (SELECT count(*) FROM `mark_details` WHERE `year` = ".$period." AND `sem` = ".$type2." AND `e_type` = '".$_REQUEST['e_type']."' AND `bcode` = md.bcode) total_students_2, (SELECT count(*) FROM `mark_details` WHERE `year` = ".$period." AND `result` = 'PASS' AND `sem` = ".$type2." AND `e_type` = '".$_REQUEST['e_type']."' AND `bcode` = md.bcode) as passed_students_2, (SELECT count(*) FROM `mark_details` WHERE `year` = ".$period." AND `result` = 'FAIL' AND `sem` = ".$type2." AND `e_type` = '".$_REQUEST['e_type']."' AND `bcode` = md.bcode) as failed_students_2, (SELECT count(*) FROM `mark_details` WHERE `year` = ".$period." AND `sem` = ".$type3." AND `e_type` = '".$_REQUEST['e_type']."' AND `bcode` = md.bcode) total_students_3, (SELECT count(*) FROM `mark_details` WHERE `year` = ".$period." AND `result` = 'PASS' AND `sem` = ".$type3." AND `e_type` = '".$_REQUEST['e_type']."' AND `bcode` = md.bcode) as passed_students_3, (SELECT count(*) FROM `mark_details` WHERE `year` = ".$period." AND `result` = 'FAIL' AND `sem` = ".$type3." AND `e_type` = '".$_REQUEST['e_type']."' AND `bcode` = md.bcode) as failed_students_3, `bcode` FROM `mark_details` md GROUP BY `bcode`;";
  $con = mysqli_connect("localhost","root","","stu-project");
  $result = mysqli_query($con, $overallQuery);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result Analysis</title>
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
  @media only print{
    .dontprint{
      display:none
    }
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
            <h1 class="title mb-3">Result Analysis</h1>
          </div>
        </div>        
        <form action="" method="get" class="dontprint">
          <div class="row">
            <div class="col mb-3">
              <label for="period" class="form-label">Select Period</label>
              <select class="form-control" id="period" type="text" name="period">
                <option value="">Choose an option</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
              </select>
            </div>
            <div class="col mb-3">
              <label for="type" class="form-label">Semester Type</label>
              <select class="form-control" id="type" type="text" name="type">
                <option value="">Choose an option</option>
                <option value="Odd">Odd</option>
                <option value="Even">Even</option>
              </select>
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
            <div class="col">
              <label for="type" class="form-label">&nbsp;</label>
              <input type="submit" value="Generate Report" class="btn btn-primary form-control" />
            </div>
          </div>
        </form>
        <div class="row">
          <div class="col">
            <?php if(isset($_REQUEST['type']) && isset($_REQUEST['e_type']) && isset($_REQUEST['period'])){ ?>
              <div class="row">
                <div class="col">
                  <h5 class="mb-3">Year: <?php echo $_REQUEST['period']; ?>, Semester Type: <?php echo $_REQUEST['type']; ?>, Exam: <?php echo $_REQUEST['e_type']; ?></h5>
                </div>
              </div>
            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead>
                  <tr align="center" class="align-middle">
                    <th rowspan="2">Branch Code</th>
                    <?php if($_REQUEST['type']=="Even"){ ?>
                      <th colspan="4">Sem 2</th>
                      <th colspan="4">Sem 4</th>
                      <th colspan="4">Sem 6</th>
                    <?php }else{ ?>
                      <th colspan="4">Sem 1</th>
                      <th colspan="4">Sem 3</th>
                      <th colspan="4">Sem 5</th>
                    <?php } ?>
                  </tr>
                  <tr class="align-middle">
                    <th>Total no. of students</th>
                    <th>No. of students passed</th>
                    <th>No. of students failed</th>
                    <th>Percentage</th>
                    <th>Total no. of students</th>
                    <th>No. of students passed</th>
                    <th>No. of students failed</th>
                    <th>Percentage</th>
                    <th>Total no. of students</th>
                    <th>No. of students passed</th>
                    <th>No. of students failed</th>
                    <th>Percentage</th>
                  </tr>
                </thead>
                <tbody>
                <?php if($result){
                    $rows = mysqli_num_rows($result);
                    if($rows===0){
                  ?>
                  <tr>
                    <td colspan="12" align="center">No Records Found</td>
                  </tr>
                  <?php }else{
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                  <tr>
                    <td><?php echo $row['bcode']; ?></td>
                    <td><?php echo $row['total_students_1']; ?></td>
                    <td><?php echo $row['passed_students_1']; ?></td>
                    <td><?php echo $row['failed_students_1']; ?></td>
                    <td><?php if($row['total_students_1']!=0)
                    echo round($row['passed_students_1'] / $row['total_students_1'],2)*100; else echo "0"; ?> %</td>
                    <td><?php echo $row['total_students_2']; ?></td>
                    <td><?php echo $row['passed_students_2']; ?></td>
                    <td><?php echo $row['failed_students_2']; ?></td>
                    <td><?php if($row['total_students_2']!=0)
                    echo round($row['passed_students_2'] / $row['total_students_2'],2)*100; else echo "0"; ?> %</td>
                    <td><?php echo $row['total_students_3']; ?></td>
                    <td><?php echo $row['passed_students_3']; ?></td>
                    <td><?php echo $row['failed_students_3']; ?></td>
                    <td><?php if($row['total_students_3']!=0)
                    echo round($row['passed_students_3'] / $row['total_students_3'],2)*100; else echo "0"; ?> %</td>
                  </tr>
                  <?php } } } ?>
                </tbody>
              </table>
            </div>
            <?php }else{ ?>
              <h4 class="">Please choose parameters</h4>  
            <?php } ?>
          </div>
        </div>
        <div class="row align-items-center justify-content-center dontprint">
          <div class="col-2">
            <button onclick="window.print()" class="btn btn-primary"><i class="bi bi-printer"></i> PRINT</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>