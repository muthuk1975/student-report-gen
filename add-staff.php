<?php
session_start();
$successMessage = "";
if(!isset($_SESSION["user_id"])){
    header("Location: login.php");
}
if(isset($_POST['staff_id'])){
  $subject = array(
    array(
      "scode" => $_POST["scode_1"],
      "sname" => $_POST["sname_1"],
      "bcode" => $_POST["bcode_1"],
      "sem" => $_POST["sem_1"],
      "year" => $_POST["year_1"],
      "scheme" => $_POST["scheme_1"],
    ),
    array(
      "scode" => $_POST["scode_2"],
      "sname" => $_POST["sname_2"],
      "bcode" => $_POST["bcode_2"],
      "sem" => $_POST["sem_2"],
      "year" => $_POST["year_2"],
      "scheme" => $_POST["scheme_2"],
    ),
    array(
      "scode" => $_POST["scode_3"],
      "sname" => $_POST["sname_3"],
      "bcode" => $_POST["bcode_3"],
      "sem" => $_POST["sem_3"],
      "year" => $_POST["year_3"],
      "scheme" => $_POST["scheme_3"],
    ),
    array(
      "scode" => $_POST["scode_4"],
      "sname" => $_POST["sname_4"],
      "bcode" => $_POST["bcode_4"],
      "sem" => $_POST["sem_4"],
      "year" => $_POST["year_4"],
      "scheme" => $_POST["scheme_4"],
    ),
  );
  $query = "INSERT INTO `staff_details`(`staff_id`, `staff_name`, `designation`, `subject`) VALUES ('".$_POST['staff_id']."','".$_POST['staff_name']."','".$_POST['designation']."','".json_encode($subject)."')";
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
  <title>Create Staff</title>
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
            <h1 class="title mb-3">Add Staff</h1>
            <?php if($successMessage!==""){ ?>
            <div class="alert alert-success" role="alert">
              <?php echo $successMessage; ?>
            </div>
            <?php } ?>
            <form action="" method="post">
              <div class="mb-3">
                <label for="staff_id" class="form-label">Staff ID</label>
                <input class="form-control" id="staff_id" type="text" name="staff_id" />
              </div>
              <div class="mb-3">
                <label for="staff_name" class="form-label">Staff Name</label>
                <input class="form-control" id="staff_name" type="text" name="staff_name" />
              </div>
              <div class="mb-3">
                <label for="designation" class="form-label">Designation</label>
                <input class="form-control" id="designation" type="text" name="designation" />
              </div>
              <div class="mb-3">
                <label for="subject" class="form-label">Search Subject</label>
                <input class="form-control" id="subject" type="text" name="subject" />
              </div>
              <div class="mb-3 row subject_1">
                <div class="col">
                  <label for="scode_1" class="form-label">Subject Code 1</label>
                  <input class="form-control" readonly="true" id="scode_1" type="text" name="scode_1" />
                </div>
                <div class="col">
                  <label for="sname_1" class="form-label">Subject Name 1</label>
                  <input class="form-control" readonly="true" id="sname_1" type="text" name="sname_1" />
                </div>
                <div class="col">
                  <label for="bcode_1" class="form-label">Branch Code 1</label>
                  <input class="form-control" readonly="true" id="bcode_1" type="text" name="bcode_1" />
                </div>
                <div class="col">
                  <label for="sem_1" class="form-label">Semester 1</label>
                  <input class="form-control" readonly="true" id="sem_1" type="text" name="sem_1" />
                </div>
                <div class="col">
                  <label for="year_1" class="form-label">Year 1</label>
                  <input class="form-control" readonly="true" id="year_1" type="text" name="year_1" />
                </div>
                <div class="col">
                  <label for="scheme_1" class="form-label">Scheme 1</label>
                  <input class="form-control" readonly="true" id="scheme_1" type="text" name="scheme_1" />
                </div>
                <div class="col">
                  <button class="btn btn-danger deleteSubject" data-id="1"><i class="bi bi-trash3"></i></button>
                </div>
              </div>
              <div class="mb-3 row subject_2">
                <div class="col">
                  <label for="scode_2" class="form-label">Subject Code 2</label>
                  <input class="form-control" readonly="true" id="scode_2" type="text" name="scode_2" />
                </div>
                <div class="col">
                  <label for="sname_2" class="form-label">Subject Name 2</label>
                  <input class="form-control" readonly="true" id="sname_2" type="text" name="sname_2" />
                </div>
                <div class="col">
                  <label for="bcode_2" class="form-label">Branch Code 2</label>
                  <input class="form-control" readonly="true" id="bcode_2" type="text" name="bcode_2" />
                </div>
                <div class="col">
                  <label for="sem_2" class="form-label">Semester 2</label>
                  <input class="form-control" readonly="true" id="sem_2" type="text" name="sem_2" />
                </div>
                <div class="col">
                  <label for="year_2" class="form-label">Year 2</label>
                  <input class="form-control" readonly="true" id="year_2" type="text" name="year_2" />
                </div>
                <div class="col">
                  <label for="scheme_2" class="form-label">Scheme 2</label>
                  <input class="form-control" readonly="true" id="scheme_2" type="text" name="scheme_2" />
                </div>
                <div class="col">
                  <button class="btn btn-danger deleteSubject" data-id="2"><i class="bi bi-trash3"></i></button>
                </div>
              </div>
              <div class="mb-3 row subject_3">
                <div class="col">
                  <label for="scode_3" class="form-label">Subject Code 3</label>
                  <input class="form-control" readonly="true" id="scode_3" type="text" name="scode_3" />
                </div>
                <div class="col">
                  <label for="sname_3" class="form-label">Subject Name 3</label>
                  <input class="form-control" readonly="true" id="sname_3" type="text" name="sname_3" />
                </div>
                <div class="col">
                  <label for="bcode_3" class="form-label">Branch Code 3</label>
                  <input class="form-control" readonly="true" id="bcode_3" type="text" name="bcode_3" />
                </div>
                <div class="col">
                  <label for="sem_3" class="form-label">Semester 3</label>
                  <input class="form-control" readonly="true" id="sem_3" type="text" name="sem_3" />
                </div>
                <div class="col">
                  <label for="year_3" class="form-label">Year 3</label>
                  <input class="form-control" readonly="true" id="year_3" type="text" name="year_3" />
                </div>
                <div class="col">
                  <label for="scheme_3" class="form-label">Scheme 3</label>
                  <input class="form-control" readonly="true" id="scheme_3" type="text" name="scheme_3" />
                </div>
                <div class="col">
                  <button class="btn btn-danger deleteSubject" data-id="3"><i class="bi bi-trash3"></i></button>
                </div>
              </div>
              <div class="mb-3 row subject_4">
                <div class="col">
                  <label for="scode_4" class="form-label">Subject Code 4</label>
                  <input class="form-control" readonly="true" id="scode_4" type="text" name="scode_4" />
                </div>
                <div class="col">
                  <label for="sname_4" class="form-label">Subject Name 4</label>
                  <input class="form-control" readonly="true" id="sname_4" type="text" name="sname_4" />
                </div>
                <div class="col">
                  <label for="bcode_4" class="form-label">Branch Code 4</label>
                  <input class="form-control" readonly="true" id="bcode_4" type="text" name="bcode_4" />
                </div>
                <div class="col">
                  <label for="sem_4" class="form-label">Semester 4</label>
                  <input class="form-control" readonly="true" id="sem_4" type="text" name="sem_4" />
                </div>
                <div class="col">
                  <label for="year_4" class="form-label">Year 4</label>
                  <input class="form-control" readonly="true" id="year_4" type="text" name="year_4" />
                </div>
                <div class="col">
                  <label for="scheme_4" class="form-label">Scheme 4</label>
                  <input class="form-control" readonly="true" id="scheme_4" type="text" name="scheme_4" />
                </div>
                <div class="col">
                  <label>&nbsp;</label><br />
                  <button class="btn btn-danger deleteSubject" data-id="4"><i class="bi bi-trash3"></i></button>
                </div>
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
    $("#subject").autocomplete({
      source: "search-subject-by-name.php",
      minLength: 1,
      select: function(event, ui) {
        if($("#sname_1").val() == ""){
          $("#sname_1").val(ui.item.sname);
          $("#scode_1").val(ui.item.scode);
          $("#bcode_1").val(ui.item.bcode);
          $("#sem_1").val(ui.item.sem);
          $("#year_1").val(ui.item.year);
          $("#scheme_1").val(ui.item.scheme);
        }else if($("#sname_2").val() == ""){
          $("#sname_2").val(ui.item.sname);
          $("#scode_2").val(ui.item.scode);
          $("#bcode_2").val(ui.item.bcode);
          $("#sem_2").val(ui.item.sem);
          $("#year_2").val(ui.item.year);
          $("#scheme_2").val(ui.item.scheme);
        }else if($("#sname_3").val() == ""){
          $("#sname_3").val(ui.item.sname);
          $("#scode_3").val(ui.item.scode);
          $("#bcode_3").val(ui.item.bcode);
          $("#sem_3").val(ui.item.sem);
          $("#year_3").val(ui.item.year);
          $("#scheme_3").val(ui.item.scheme);
        }else if($("#sname_4").val() == ""){
          $("#sname_4").val(ui.item.sname);
          $("#scode_4").val(ui.item.scode);
          $("#bcode_4").val(ui.item.bcode);
          $("#sem_4").val(ui.item.sem);
          $("#year_4").val(ui.item.year);
          $("#scheme_4").val(ui.item.scheme);
        }
      }
    })
    $(".deleteSubject").on("click", function(e){
      e.preventDefault();
      var id = $(this).data("id");
      $(`#sname_${id}`).val("");
      $(`#scode_${id}`).val("");
      $(`#sem_${id}`).val("");
      $(`#year_${id}`).val("");
      $(`#scheme_${id}`).val("");
    })
  })
  </script>
</body>

</html>