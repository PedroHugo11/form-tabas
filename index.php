<html>
<head>
  <title>Form Page</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
  <!-- JS -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="js/date-picker.js"></script>
  <!-- FONTAWESOME -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <!-- META -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui"/>
       
</head>
<body class="container-member-gray">
	<div class="container h-100">
  <div class="col-12 col-sm-9 col-md-7 col-lg-5 col-xxl-4 bg-white p-5 my-0 my-sm-5 mx-auto h-pc-100 h-pc-sm-auto mb-0">
    <div class="row">
      <div class="col-sm-12">
        <h4 class="card-title text-center">Create Account</h4>
        <p class="text-center">Get started with your free account</p>

        <div class="row border btn-lg border-dark my-4 text-start mx-0 pe-0 px-sm-3 social-btn">
          <i class="fab fa-facebook-f col-2 px-1 py-2"></i>
          <a href="" class="col ps-0 ps-sm-3 ps-md-5 pe-0 py-1 px-4 text-decoration-none text-start text-dark" id="login-facebook">Login via Facebook</a>
        </div>
        <p class="divider-text">
            <span class="bg-white spam-divider">OR</span>
        </p>
        <form action="sendContact.php" method="post">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                  <label for="email">E-mail:</label><br>
                  <input type="email" name="email" id="email" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                  <label for="category">Category:</label><br>
                  <select class="form-control" name="category" id="category">
                    <option selected="">Select your category</option>
                    <option value="property">Property</option>
                    <option value="customers">Customers</option>
                  </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                  <label for="birth">Date Of Birth:</label><br>
                  <div class="input-group date">
                      <input class="form-control" type="text" name="birth" id="birth" />
                      <span class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fa fa-calendar"></i>
                        </button>
                      </span>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                  <label for="password">Password:</label><br>
                  <input type="password" name="password" id="password" class="form-control" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
            <label>
                <input type="checkbox" name="remember"> Remember password
            </label>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-lg btn-dark fs-6 py-3 fw-bold text-uppercase w-100 rounded-0 my-3 button-submit">Create Account</button>
            </div>
          </div>  
        </form>
      </div>
    </div>
  </div> 
</div>
</body>
</html>