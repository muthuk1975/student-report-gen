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
  </style>
</head>

<body>
  <div class="container h-100">
    <div class="row h-100 align-items-center justify-content-center">
      <div class="col-8">
        <form action="view-results.php" method="post">
          <h1 class="title mb-3">View Results</h1>
          <div class="row">
            <div class="col mb-3">
              <label for="regno" class="form-label">Register Number</label>
              <input class="form-control" id="regno" type="text" name="regno"
                placeholder="Enter your Register Number" />
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
              <label for="e_type" class="form-label">Exam Type</label>
              <select class="form-control mb-1" id="e_type" name="e_type">
                <option value="">Select Exam Type</option>
                <option value="IA1">Internal Assesment Test 1</option>
                <option value="IA2">Internal Assesment Test 2</option>
                <option value="Model">Model Exam</option>
              </select>
            </div>
            <div class="col mb-3">
              <label for="year" class="form-label">Year</label>
              <select class="form-control" id="year" type="text" name="year">
                <option value="">Choose an option</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
              </select>
            </div>
          </div>
          <div>
            <input class="btn btn-primary" type="submit" value="See Results" />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>