<html>
<head>
<title>Find substring</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <form role="form" action="string.php" method="POST" >
    <div class="form-group ">
      pattern:
      <input type="text" class="form-control" name="pattern" placeholder="Enter pattern" required>
    </div>
    <div class="form-group ">
      Text:
      <input type="text" class="form-control" name="text1" placeholder="Enter text" required>
    </div>
     <button type="submit" class="form-control btn btn-success">Submit</button>
    </form>
    </body>
    </html>