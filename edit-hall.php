<?php
session_start();
require("config.php");
$successMessage = "";
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
if(isset($_REQUEST["id"])){
  $con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
  if(isset($_POST['hall_name'])){
    $query = "UPDATE `hall_details` SET `hall_name` = '".$_POST['hall_name']."' WHERE `id` = '".$_REQUEST["id"]."'";
    mysqli_query($con, $query);
    $successMessage = "Record Added";
  }
  $selectQuery = "SELECT * FROM `hall_details` WHERE `id` = '".$_REQUEST['id']."'";
  $result = mysqli_query($con,$selectQuery);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Hall</title>
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
            <h1 class="title mb-3">Edit Hall</h1>
            <?php if($successMessage!==""){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $successMessage; ?>
            </div>
            <?php } ?>
            <form action="" method="post">
              <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
              <div class="mb-3">
                <label for="hall_name" class="form-label">Hall Name/Number</label>
                <input class="form-control" id="hall_name" type="text" name="hall_name" value="<?php echo $row['hall_name']; ?>" />
              </div>
              <?php } ?>
              <div>
                <input class="btn btn-primary" type="submit" value="Update" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>