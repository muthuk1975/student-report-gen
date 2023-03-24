<?php
session_start();
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}else if(isset($_GET["deleteid"])){
    $query = "DELETE FROM `hall_details` WHERE `id` = ".$_GET["deleteid"];
    $con = mysqli_connect("localhost","root","","stu-project");
    mysqli_query($con, $query);
    $selectQuery = "SELECT * FROM `hall_details`";
    $result = mysqli_query($con, $selectQuery);
}else{
    $query = "SELECT * FROM `hall_details`";
    $con = mysqli_connect("localhost","root","","stu-project");
    $result = mysqli_query($con, $query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halls</title>
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
                <h1 class="title mb-3">View Halls</h1>
              </div>
              <div class="col"><a class="btn btn-primary" href="add-hall.php" role="button">Add Hall</a></div>
            </div>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Hall Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if($result){
                    $rows = mysqli_num_rows($result);
                    if($rows===0){
                  ?>
                  <tr>
                    <td colspan="3" align="center">No Records Found</td>
                  </tr>
                  <?php }else{
                    $i=1;
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["hall_name"]; ?></td>
                    <td>
                      <a href="edit-hall.php?id=<?php echo $row["id"]; ?>">Edit</a> | <a
                        href="?deleteid=<?php echo $row["id"]; ?>">Delete</a>
                    </td>
                  </tr>
                  <?php
                    $i++;
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