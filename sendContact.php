<?php

$email = (empty($_POST['email'])) ? 'unknown' : $_POST['email'];
$category = (empty($_POST['category'])) ? 'unknown' : $_POST['category'];
$birth = (empty($_POST['birth'])) ? 'unknown' : $_POST['birth'];
$password = (empty($_POST['password'])) ? 'unknown' : $_POST['password'];
$remember = (isset($_POST['remember'])) ? "remember" : "dont remember";

?>

<html>
<head>
  <title>Form Page</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- JS -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <!-- META -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>

</head>
<body class="container-member-gray">
	<div class="container h-100">
  <div class="col-12 col-sm-12 col-md-7 col-lg-5 col-xxl-4 bg-white p-5 mt-5 mx-auto h-pc-100 h-pc-sm-auto">
    <div class="row">
      <div class="col-sm-12">
        <h4 class="card-title text-center">Account Created</h4>
        <p class="text-center">Your account has been successfully created</p>
        <p class="divider-text">
            <span class="bg-white spam-divider">CONGRATULATIONS</span>
        </p>
          <div class="row">
            <div class="col-sm-12">
              <h5 class="title-data">E-mail:</h5>
              <h3 class="result-data"><?php echo $email?></h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <h5 class="title-data">Category:</h3>
              <h3 class="result-data"><?php echo $category?></h3>
            </div>
            <div class="col-sm-6">
            <h3 class="title-data">Date of Birth:</h3>
              <h5 class="result-data"><?php echo $birth?></h5>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h3 class="title-data">Password:</h3>
              <h5 class="result-data"><?php echo $password?></h5>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <h3 class="title-data">Remember password ?</h3>
              <h5 class="result-data"><?php echo $remember?></h5>
            </div>
          </div>
          <form action="config/backToIndex.php" method="post">
          <div class="row">
            <div class="col-sm-12">
              <input type="submit" name="back" value="back to form" class="btn btn-lg btn-dark fs-6 py-3 fw-bold text-uppercase w-100 rounded-0 mt-3 mb-0">
            </div>
          </div>  
        </form>
      </div>
    </div>
  </div> 
</div>
</body>
</html>

