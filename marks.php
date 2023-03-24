<?php
session_start();
require("config.php");
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}else if(isset($_GET["deleteid"])){
    $query = "DELETE FROM `mark_details` WHERE `id` = ".$_GET["deleteid"];
    $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
    mysqli_query($con, $query);
    $selectQuery = "SELECT * FROM `mark_details` WHERE `regno` = ".$_REQUEST['viewid'];
    $result = mysqli_query($con, $selectQuery);
}else{
    $query = "SELECT * FROM `mark_details` WHERE `regno` = ".$_REQUEST['viewid'];
    $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
    $result = mysqli_query($con, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marks</title>
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
      <div class="col-10 pt-3">
        <div class="row">
          <div class="col-12">
            <h2 style="text-align:center;font-size:40px;color:#00d">Online Progress Report</h2>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="row">
              <div class="col-10">
                <h1 class="title mb-3">View Marks</h1>
              </div>
              <div class="col"><a class="btn btn-primary" href="add-mark.php" role="button">Add Mark</a></div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Reg. No</th>
                    <th>Student Name</th>
                    <th>Branch Code</th>
                    <th>Branch Name</th>
                    <th>Semester</th>
                    <th>Exam Type</th>
                    <th>Subject 1</th>
                    <th>Subject 2</th>
                    <th>Subject 3</th>
                    <th>Subject 4</th>
                    <th>Subject 5</th>
                    <th>Total</th>
                    <th>Result</th>
                    <th>Mark Percentage</th>
                    <th>Attendance Percentage</th>
                    <th>Month</th>
                    <th>Year</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if($result){
                    $rows = mysqli_num_rows($result);
                    if($rows===0){
                  ?>
                  <tr>
                    <td colspan="17" align="center">No Records Found</td>
                  </tr>
                  <?php }else{
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                  <tr>
                    <td><?php echo $row["regno"]; ?></td>
                    <td><?php echo $row["stname"]; ?></td>
                    <td><?php echo $row["bcode"]; ?></td>
                    <td><?php echo $row["bname"]; ?></td>
                    <td><?php echo $row["sem"]; ?></td>
                    <td><?php echo $row["e_type"]; ?></td>
                    <td><?php echo $row["subcode_1"]; ?> - <?php echo $row["sub_1"]; ?>:
                      <strong><?php if($row['mark_1'] == -1){echo "A"; }else{echo $row['mark_1'];} ?></strong>
                    </td>
                    <td><?php echo $row["subcode_2"]; ?> - <?php echo $row["sub_2"]; ?>:
                      <strong><?php if($row['mark_2'] == -1){echo "A"; }else{echo $row['mark_2'];} ?></strong>
                    </td>
                    <td><?php echo $row["subcode_3"]; ?> - <?php echo $row["sub_3"]; ?>:
                      <strong><?php if($row['mark_3'] == -1){echo "A"; }else{echo $row['mark_3'];} ?></strong>
                    </td>
                    <td><?php echo $row["subcode_4"]; ?> - <?php echo $row["sub_4"]; ?>:
                      <strong><?php if($row['mark_4'] == -1){echo "A"; }else{echo $row['mark_4'];} ?></strong>
                    </td>
                    <td><?php echo $row["subcode_5"]; ?> - <?php echo $row["sub_5"]; ?>:
                      <strong><?php if($row['mark_5'] == -1){echo "A"; }else{echo $row['mark_5'];} ?></strong>
                    </td>
                    <td><?php echo $row["total"]; ?></td>
                    <td><?php echo $row["result"]; ?></td>
                    <td><?php echo $row["m_per"]; ?></td>
                    <td><?php echo $row["att_per"]; ?></td>
                    <td><?php echo $row["month"]; ?></td>
                    <td><?php echo $row["year"]; ?></td>
                    <td><a href="?deleteid=<?php echo $row["id"]; ?>">Delete</a>
                    </td>
                  </tr>
                  <?php
                    }
                    } } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>