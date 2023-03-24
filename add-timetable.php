<?php
session_start();
$successMessage = "";
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
$con = mysqli_connect("localhost","root","","stu-project");
$hallQuery = "SELECT * FROM `hall_details`";
$hallResult = mysqli_query($con,$hallQuery);
$staffQuery = "SELECT * FROM `staff_details`";
$staffResult = mysqli_query($con,$staffQuery);
if(isset($_POST['sem'])){
  $monIndex = 0;
  $monHour = 1;
  foreach($_POST["hall_monday"] as $hall){
    $mondayQuery = "INSERT INTO `timetable_details`(`day`, `hour`, `hall_name`, `staff_name`, `subject`, `bcode`, `sem`, `year`) VALUES ('Monday','".$hour."','$hall','".$_POST['staff_monday'][$index]."','".$_POST['subject_monday'][$index]."','".$_POST["bcode"]."','".$_POST["sem"]."','".$_POST["year"]."')";
    mysqli_query($con, $mondayQuery);
    $monIndex++;
    $monHour++;
  }
  $tueIndex = 0;
  $tueHour = 1;
  foreach($_POST["hall_tuesday"] as $hall){
    $tuesdayQuery = "INSERT INTO `timetable_details`(`day`, `hour`, `hall_name`, `staff_name`, `subject`, `bcode`, `sem`, `year`) VALUES ('Tuesday','".$hour."','$hall','".$_POST['staff_tuesday'][$index]."','".$_POST['subject_tuesday'][$index]."','".$_POST["bcode"]."','".$_POST["sem"]."','".$_POST["year"]."')";
    mysqli_query($con, $tuesdayQuery);
    $tueIndex++;
    $tueHour++;
  }
  $wedIndex = 0;
  $wedHour = 1;
  foreach($_POST["hall_wednesday"] as $hall){
    $wednesdayQuery = "INSERT INTO `timetable_details`(`day`, `hour`, `hall_name`, `staff_name`, `subject`, `bcode`, `sem`, `year`) VALUES ('Wednesday','".$hour."','$hall','".$_POST['staff_wednesday'][$index]."','".$_POST['subject_wednesday'][$index]."','".$_POST["bcode"]."','".$_POST["sem"]."','".$_POST["year"]."')";
    mysqli_query($con, $wednesdayQuery);
    $wedIndex++;
    $wedHour++;
  }
  $thuIndex = 0;
  $thuHour = 1;
  foreach($_POST["hall_thursday"] as $hall){
    $thursdayQuery = "INSERT INTO `timetable_details`(`day`, `hour`, `hall_name`, `staff_name`, `subject`, `bcode`, `sem`, `year`) VALUES ('Thursday','".$hour."','$hall','".$_POST['staff_thursday'][$index]."','".$_POST['subject_thursday'][$index]."','".$_POST["bcode"]."','".$_POST["sem"]."','".$_POST["year"]."')";
    mysqli_query($con, $thursdayQuery);
    $thuIndex++;
    $thuHour++;
  }
  $friIndex = 0;
  $friHour = 1;
  foreach($_POST["hall_friday"] as $hall){
    $fridayQuery = "INSERT INTO `timetable_details`(`day`, `hour`, `hall_name`, `staff_name`, `subject`, `bcode`, `sem`, `year`) VALUES ('Friday','".$hour."','$hall','".$_POST['staff_friday'][$index]."','".$_POST['subject_friday'][$index]."','".$_POST["bcode"]."','".$_POST["sem"]."','".$_POST["year"]."')";
    mysqli_query($con, $fridayQuery);
    $friIndex++;
    $friHour++;
  }
  $successMessage = "Record Added";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Timetable</title>
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
            <h1 class="title mb-3">Add Timetable</h1>
            <?php if($successMessage!==""){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $successMessage; ?>
            </div>
            <?php } ?>
            <form action="" method="post">
              <div class="row">
                <div class="col mb-3">
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
                  <label for="year" class="form-label">Year</label>
                  <input class="form-control" id="year" name="year" type="number" />
                </div>
              </div>
              <div class="table-responsive">
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
                    <tr>
                      <th>Monday</th>
                      <td>
                        <div class="mb-3">
                          <label for="day_1_hour_1_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_monday[]" id="day_1_hour_1_hall">
                            <option value="">Select Hall</option>
                            <?php while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_1_hour_1_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_monday[]" id="day_1_hour_1_staff" data-day="monday">
                            <option value="">Select Staff</option>
                            <?php while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_1_hour_2_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_monday[]" id="day_1_hour_2_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_1_hour_2_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_monday[]" id="day_1_hour_2_staff" data-day="monday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_1_hour_3_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_monday[]" id="day_1_hour_3_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_1_hour_3_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_monday[]" id="day_1_hour_3_staff" data-day="monday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_1_hour_4_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_monday[]" id="day_1_hour_4_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_1_hour_4_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_monday[]" id="day_1_hour_4_staff" data-day="monday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_1_hour_5_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_monday[]" id="day_1_hour_5_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_1_hour_5_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_monday[]" id="day_1_hour_5_staff" data-day="monday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_1_hour_6_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_monday[]" id="day_1_hour_6_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_1_hour_6_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_monday[]" id="day_1_hour_6_staff" data-day="monday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_1_hour_7_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_monday[]" id="day_1_hour_7_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_1_hour_7_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_monday[]" id="day_1_hour_7_staff" data-day="monday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>Tuesday</th>
                      <td>
                        <div class="mb-3">
                          <label for="day_2_hour_1_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_tuesday[]" id="day_2_hour_1_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_2_hour_1_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_tuesday[]" id="day_2_hour_1_staff" data-day="tuesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_2_hour_2_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_tuesday[]" id="day_2_hour_2_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_2_hour_2_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_tuesday[]" id="day_2_hour_2_staff" data-day="tuesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_2_hour_3_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_tuesday[]" id="day_2_hour_3_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_2_hour_3_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_tuesday[]" id="day_2_hour_3_staff" data-day="tuesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_2_hour_4_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_tuesday[]" id="day_2_hour_4_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_2_hour_4_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_tuesday[]" id="day_2_hour_4_staff" data-day="tuesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_2_hour_5_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_tuesday[]" id="day_2_hour_5_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_2_hour_5_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_tuesday[]" id="day_2_hour_5_staff" data-day="tuesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_2_hour_6_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_tuesday[]" id="day_2_hour_6_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_2_hour_6_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_tuesday[]" id="day_2_hour_6_staff" data-day="tuesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_2_hour_7_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_tuesday[]" id="day_2_hour_7_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_2_hour_7_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_tuesday[]" id="day_2_hour_7_staff" data-day="tuesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>Wednesday</th>
                      <td>
                        <div class="mb-3">
                          <label for="day_3_hour_1_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_wednesday[]" id="day_3_hour_1_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_3_hour_1_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_wednesday[]" id="day_3_hour_1_staff" data-day="wednesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_3_hour_2_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_wednesday[]" id="day_3_hour_2_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_3_hour_2_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_wednesday[]" id="day_3_hour_2_staff" data-day="wednesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_3_hour_3_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_wednesday[]" id="day_3_hour_3_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_3_hour_3_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_wednesday[]" id="day_3_hour_3_staff" data-day="wednesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_3_hour_4_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_wednesday[]" id="day_3_hour_4_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_3_hour_4_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_wednesday[]" id="day_3_hour_4_staff" data-day="wednesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_3_hour_5_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_wednesday[]" id="day_3_hour_5_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_3_hour_5_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_wednesday[]" id="day_3_hour_5_staff" data-day="wednesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_3_hour_6_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_wednesday[]" id="day_3_hour_6_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_3_hour_6_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_wednesday[]" id="day_3_hour_6_staff" data-day="wednesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_3_hour_7_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_wednesday[]" id="day_3_hour_7_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_3_hour_7_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_wednesday[]" id="day_3_hour_7_staff" data-day="wednesday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>Thursday</th>
                      <td>
                        <div class="mb-3">
                          <label for="day_4_hour_1_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_thursday[]" id="day_4_hour_1_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_4_hour_1_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_thursday[]" id="day_4_hour_1_staff" data-day="thursday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_4_hour_2_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_thursday[]" id="day_4_hour_2_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_4_hour_2_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_thursday[]" id="day_4_hour_2_staff" data-day="thursday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_4_hour_3_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_thursday[]" id="day_4_hour_3_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_4_hour_3_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_thursday[]" id="day_4_hour_3_staff" data-day="thursday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_4_hour_4_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_thursday[]" id="day_4_hour_4_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_4_hour_4_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_thursday[]" id="day_4_hour_4_staff" data-day="thursday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_4_hour_5_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_thursday[]" id="day_4_hour_5_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_4_hour_5_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_thursday[]" id="day_4_hour_5_staff" data-day="thursday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_4_hour_6_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_thursday[]" id="day_4_hour_6_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_4_hour_6_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_thursday[]" id="day_4_hour_6_staff" data-day="thursday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_4_hour_7_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_thursday[]" id="day_4_hour_7_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_4_hour_7_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_thursday[]" id="day_4_hour_7_staff" data-day="thursday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>Friday</th>
                      <td>
                        <div class="mb-3">
                          <label for="day_5_hour_1_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_friday[]" id="day_5_hour_1_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_5_hour_1_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_friday[]" id="day_5_hour_1_staff" data-day="friday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_5_hour_2_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_friday[]" id="day_5_hour_2_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_5_hour_2_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_friday[]" id="day_5_hour_2_staff" data-day="friday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_5_hour_3_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_friday[]" id="day_5_hour_3_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_5_hour_3_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_friday[]" id="day_5_hour_3_staff" data-day="friday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_5_hour_4_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_friday[]" id="day_5_hour_4_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_5_hour_4_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_friday[]" id="day_5_hour_4_staff" data-day="friday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_5_hour_5_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_friday[]" id="day_5_hour_5_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_5_hour_5_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_friday[]" id="day_5_hour_5_staff" data-day="friday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_5_hour_6_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_friday[]" id="day_5_hour_6_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_5_hour_6_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_friday[]" id="day_5_hour_6_staff" data-day="friday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                      <td>
                        <div class="mb-3">
                          <label for="day_5_hour_7_hall" class="form-label">Choose Hall</label>
                          <select type="text" class="form-control" name="hall_friday[]" id="day_5_hour_7_hall">
                            <option value="">Select Hall</option>
                            <?php mysqli_data_seek($hallResult,0); while($hall = mysqli_fetch_array($hallResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $hall["hall_name"] ?>"><?php echo $hall["hall_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="mb-3">
                          <label for="day_5_hour_7_staff" class="form-label">Choose Staff</label>
                          <select type="text" class="form-control" name="staff_friday[]" id="day_5_hour_7_staff" data-day="friday">
                            <option value="">Select Staff</option>
                            <?php mysqli_data_seek($staffResult,0); while($staff = mysqli_fetch_array($staffResult, MYSQLI_ASSOC)){ ?>
                              <option value="<?php echo $staff["staff_name"] ?>" data-subjects='<?php echo $staff['subject']; ?>'><?php echo $staff["staff_name"] ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
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