<?php
include('sesion_start.php');
?>
<!DOCTYPE html>
<head>
  <title>Problem</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" >
  <div class="col-sm-8" style="background-color:lavender;">
  <div class="col-sm-12">
  <h1>Login</h1>
</div>
  <form role="form" class="col-sm-8" id="Update Problem">
<div class="form-group">
  <label for="Disease">Disease:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
<div class="form-group">
  <label for="Problem">Problem:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
<div class="form-group">
  <label for="Symptoms">Symptoms:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>


</form>
</body>
</html>