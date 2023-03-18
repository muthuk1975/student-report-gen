<?php
if(isset($_POST["regno"])){
    $query = "SELECT * FROM `mark_details` WHERE `regno` = '".$_POST["regno"]."' AND `sem` = '".$_POST['sem']."' AND `e_type` = '".$_POST['e_type']."' AND `year` = '".$_POST['year']."'";
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
  <title>View Results</title>
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
  @media only print{
    .dontprint{
      display:none
    }
  }
  </style>
</head>

<body>
  <div class="container h-100">
    <div class="row h-100 align-items-center justify-content-center">
      <div class="col-12">
        <div class="row">
          <div class="col-2"><img src="./assets/logo_avptc_new.png" style="max-width:150px" alt="" class="img-fluid">
          </div>
          <div class="col">
            <h2 style="color:#00a;text-align:center;" class="mt-4 mb-0">அன்னை வேளாங்கன்னி பாலிடெக்னிக் கல்லூரி</h2>
            <h3 class="mt-2 mb-2" style="color:#d00;font-size:20px;text-align:center;">(AN ISO 9001:2015 CERTIFIED
              INSTITUTION)<br />Run by
              the Sister's
              of St.Anne Trichy</h3>
            <h2 style="color:#00a;text-align:center;font-size:22px">அங்குச்செட்டிபாளையம், பண்ருட்டி - 607106</h2>
          </div>
          <div class="col-2">
            <img src="./assets/avptc_acc.png" alt="" class="img-fluid">
          </div>
        </div>
        <?php if($result){
          $rows = mysqli_num_rows($result);
          if($rows===0){
        ?>
        <h1>No Records Found</h1>
        <?php }else{
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
        <h1 class="title mb-3"><?php echo $row['e_type']; ?> Examination - <?php echo $row["month"]; ?> /
          <?php echo $row["year"]; ?></h1>
        <div class="row mb-1" style="font-size:20px">
          <div class="col-3">
            Register Number
          </div>
          <div class="col-3">
            <strong><?php echo $row["regno"]; ?></strong>
          </div>
          <div class="col-3">
            Branch Name
          </div>
          <div class="col-3">
            <strong><?php echo $row["bname"]; ?></strong>
          </div>
        </div>
        <div class="row mb-1" style="font-size:20px">
          <div class="col-3">
            Name
          </div>
          <div class="col-3">
            <strong><?php echo $row["stname"]; ?></strong>
          </div>
          <div class="col-3">
            Semester
          </div>
          <div class="col-3">
            <strong><?php echo $row["sem"]; ?></strong>
          </div>
        </div>
        <div class="row mb-3" style="font-size:20px">
          <div class="col-3">
            Branch Code
          </div>
          <div class="col-3">
            <strong><?php echo $row["bcode"]; ?></strong>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>S.No</th>
                <th>Subject Code</th>
                <th>Subject Name</th>
                <th>Mark Obtained</th>
                <th>Out of</th>
                <th>Result</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><?php echo $row["subcode_1"]; ?></td>
                <td><?php echo $row["sub_1"]; ?></td>
                <td>
                  <strong>
                    <?php if($row['mark_1'] < 30 && $row["e_type"] === "Model"){ ?><span
                      style="color:red"><?php } ?>
                    <?php if($row['mark_1'] < 20 && $row["e_type"] !== "Model"){ ?><span
                      style="color:red"><?php } ?>
                    <?php if($row['mark_1'] == -1){echo "<span style='color:red'>A</span>"; }else{echo $row['mark_1'];} ?>
                    <?php if($row['mark_1'] < 30 && $row["e_type"] === "Model"){ ?></span><?php } ?>
                    <?php if($row['mark_1'] < 20 && $row["e_type"] !== "Model"){ ?></span><?php } ?>
                  </strong>
                </td>
                <td><?php if($row["e_type"]==="Model"){echo "75";}else{echo "50";} ?></td>
                <td><strong><?php if($row['mark_1'] >= 30 && $row["e_type"] === "Model"){ ?><span
                      style="color:green">Pass</span><?php } else if($row['mark_1'] >= 20 && $row["e_type"] !== "Model"){ ?><span
                      style="color:green">Pass</span><?php } else{ ?><span
                      style="color:red">Fail</span><?php } ?></strong></td>
              </tr>
              <tr>
                <td>2</td>
                <td><?php echo $row["subcode_2"]; ?></td>
                <td><?php echo $row["sub_2"]; ?></td>
                <td>
                  <strong>
                    <?php if($row['mark_2'] < 30 && $row["e_type"] === "Model"){ ?><span
                      style="color:red"><?php } ?>
                    <?php if($row['mark_2'] < 20 && $row["e_type"] !== "Model"){ ?><span
                      style="color:red"><?php } ?>
                    <?php if($row['mark_2'] == -1){echo "<span style='color:red'>A</span>"; }else{echo $row['mark_2'];} ?>
                    <?php if($row['mark_2'] < 30 && $row["e_type"] === "Model"){ ?></span><?php } ?>
                    <?php if($row['mark_2'] < 20 && $row["e_type"] !== "Model"){ ?></span><?php } ?>
                  </strong>
                </td>
                <td><?php if($row["e_type"]==="Model"){echo "75";}else{echo "50";} ?></td>
                <td><strong><?php if($row['mark_2'] >= 30 && $row["e_type"] === "Model"){ ?><span
                      style="color:green">Pass</span><?php } else if($row['mark_2'] >= 20 && $row["e_type"] !== "Model"){ ?><span
                      style="color:green">Pass</span><?php } else{ ?><span
                      style="color:red">Fail</span><?php } ?></strong></td>
              </tr>
              <tr>
                <td>3</td>
                <td><?php echo $row["subcode_3"]; ?></td>
                <td><?php echo $row["sub_3"]; ?></td>
                <td>
                <strong>
                    <?php if($row['mark_3'] < 30 && $row["e_type"] === "Model"){ ?><span
                      style="color:red"><?php } ?>
                    <?php if($row['mark_3'] < 20 && $row["e_type"] !== "Model"){ ?><span
                      style="color:red"><?php } ?>
                    <?php if($row['mark_3'] == -1){echo "<span style='color:red'>A</span>"; }else{echo $row['mark_3'];} ?>
                    <?php if($row['mark_3'] < 30 && $row["e_type"] === "Model"){ ?></span><?php } ?>
                    <?php if($row['mark_3'] < 20 && $row["e_type"] !== "Model"){ ?></span><?php } ?>
                  </strong>
                </td>
                <td><?php if($row["e_type"]==="Model"){echo "75";}else{echo "50";} ?></td>
                <td><strong><?php if($row['mark_3'] >= 30 && $row["e_type"] === "Model"){ ?><span
                      style="color:green">Pass</span><?php } else if($row['mark_3'] >= 20 && $row["e_type"] !== "Model"){ ?><span
                      style="color:green">Pass</span><?php } else{ ?><span
                      style="color:red">Fail</span><?php } ?></strong></td>
              </tr>
              <?php if($row['mark_4']){ ?>
              <tr>
                <td>4</td>
                <td><?php echo $row["subcode_4"]; ?></td>
                <td><?php echo $row["sub_4"]; ?></td>
                <td>
                  <strong>
                    <?php if($row['mark_4'] < 30 && $row["e_type"] === "Model"){ ?><span
                      style="color:red"><?php } ?>
                    <?php if($row['mark_4'] < 20 && $row["e_type"] !== "Model"){ ?><span
                      style="color:red"><?php } ?>
                    <?php if($row['mark_4'] == -1){echo "<span style='color:red'>A</span>"; }else{echo $row['mark_4'];} ?>
                    <?php if($row['mark_4'] < 30 && $row["e_type"] === "Model"){ ?></span><?php } ?>
                    <?php if($row['mark_4'] < 20 && $row["e_type"] !== "Model"){ ?></span><?php } ?>
                  </strong>
                </td>
                <td><?php if($row["e_type"]==="Model"){echo "75";}else{echo "50";} ?></td>
                <td><strong><?php if($row['mark_4'] >= 30 && $row["e_type"] === "Model"){ ?><span
                      style="color:green">Pass</span><?php } else if($row['mark_4'] >= 20 && $row["e_type"] !== "Model"){ ?><span
                      style="color:green">Pass</span><?php } else{ ?><span
                      style="color:red">Fail</span><?php } ?></strong></td>
              </tr>
              <?php } ?>
              <?php if($row['mark_5']){ ?>
              <tr>
                <td>5</td>
                <td><?php echo $row["subcode_5"]; ?></td>
                <td><?php echo $row["sub_5"]; ?></td>
                <td>
                  <strong>
                    <?php if($row['mark_5'] < 30 && $row["e_type"] === "Model"){ ?><span
                      style="color:red"><?php } ?>
                    <?php if($row['mark_5'] < 20 && $row["e_type"] !== "Model"){ ?><span
                      style="color:red"><?php } ?>
                    <?php if($row['mark_5'] == -1){echo "<span style='color:red'>A</span>"; }else{echo $row['mark_5'];} ?>
                    <?php if($row['mark_5'] < 30 && $row["e_type"] === "Model"){ ?></span><?php } ?>
                    <?php if($row['mark_5'] < 20 && $row["e_type"] !== "Model"){ ?></span><?php } ?>
                  </strong>
                </td>
                <td><?php if($row["e_type"]==="Model"){echo "75";}else{echo "50";} ?></td>
                <td><strong><?php if($row['mark_5'] >= 30 && $row["e_type"] === "Model"){ ?><span
                      style="color:green">Pass</span><?php } else if($row['mark_5'] >= 20 && $row["e_type"] !== "Model"){ ?><span
                      style="color:green">Pass</span><?php } else{ ?><span
                      style="color:red">Fail</span><?php } ?></strong></td>
              </tr>
              <?php } ?>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="3">Total</th>
                <th><?php echo $row["total"]; ?></th>
                <th><?php if($row["e_type"]==="Model"){echo "300";}else{echo "200";} ?></th>
                <th><span
                    style="color:<?php if($row["result"]==="PASS"){echo "green";}else{echo "red";} ?>"><?php echo $row["result"]; ?></span>
                </th>
              </tr>
            </tfoot>
          </table>
        </div>
        <div>Attendance percentage <?php echo $row["att_per"]; ?> as on <?php echo $row["att_date"]; ?></div>
        <?php if($row["remarks"]){ ?>
        <div class="row mt-2 mb-4">
          <div class="col"><strong>Remarks: </strong><?php echo $row["remarks"]; ?></div>
        </div>
        <?php } ?>
        <div class="row mt-5">
          <div class="col-10">
            HOD
          </div>
          <div class="col-2">
            Principal
          </div>
        </div>
        <?php
      }
      } } ?>
        <div class="row align-items-center justify-content-center dontprint">
          <div class="col-2">
            <button onclick="window.print()" class="btn btn-primary"><i class="bi bi-printer"></i> PRINT</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>