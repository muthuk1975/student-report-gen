<?php
session_start();
require("config.php");
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}else if(isset($_GET["deleteid"])){
    $query = "DELETE FROM `student_details` WHERE `regno` = ".$_GET["deleteid"];
    $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
    mysqli_query($con, $query);
    $selectQuery = "SELECT * FROM `student_details`";
    $result = mysqli_query($con, $selectQuery);
}else{
    $query = "SELECT * FROM `student_details`";
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
  <title>Main Page</title>
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
                <h1 class="title mb-3">View Students</h1>
              </div>
              <div class="col"><a class="btn btn-primary" href="add-student.php" role="button">Add Student</a></div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Reg. No</th>
                    <th>Name</th>
                    <th>Branch</th>
                    <th>Address</th>
                    <th>Student Phone</th>
                    <th>Parent Name</th>
                    <th>Parent Phone</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if($result){
                    $rows = mysqli_num_rows($result);
                    if($rows===0){
                  ?>
                  <tr>
                    <td colspan="8" align="center">No Records Found</td>
                  </tr>
                  <?php }else{
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                  <tr>
                    <td><?php echo $row["regno"]; ?></td>
                    <td><a href="marks.php?viewid=<?php echo $row['regno']; ?>"><?php echo $row["stname"]; ?></a></td>
                    <td><?php echo $row["bname"]; ?></td>
                    <td><?php echo $row["add1"]; ?>, <?php echo $row["add2"]; ?>, <?php echo $row["add3"]; ?></td>
                    <td><?php echo $row["stu_phone"]; ?></td>
                    <td><?php echo $row["p_name"]; ?></td>
                    <td><?php echo $row["p_phone"]; ?></td>
                    <td>
                      <a href="edit-student.php?id=<?php echo $row["regno"]; ?>">Edit</a> | <a
                        href="?deleteid=<?php echo $row["regno"]; ?>">Delete</a>
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