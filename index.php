<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from responsivewebinc.com/premium/macadmin/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 23 Sep 2013 04:41:15 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Login - Sistem Penunjang Keputusan Pemilihan Konten Iklan Terbaik</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  <link href="style/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="style/font-awesome.css">
  <link href="style/style.css" rel="stylesheet">
  <link href="style/bootstrap-responsive.css" rel="stylesheet">

  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <!--link rel="shortcut icon" href="img/favicon/favicon.png"!-->
</head>

<body>

  <!-- Form area -->
  <div class="admin-form">
    <div>

      <div class="row">
        <div class="col-md-12">
          <!-- Widget starts -->
          <div class="widget worange">
            <!-- Widget head -->
            <div class="widget-head">
              <i class="icon-lock"></i> Login
            </div>

            <div class="widget-content">
              <div class="padd">
                <!-- Login form -->
                <form id="add-form" enctype="multipart/form-data" action="conf/login_post.php" method="post" class="form-horizontal">
                  <!-- Email -->
                  <div class="form-group">
                    <label class="control-label col-lg-3" for="inputEmail">Username</label>
                    <div class="col-lg-9">
                      <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Username">
                    </div>
                  </div>
                  <!-- Password -->
                  <div class="form-group">
                    <label class="control-label col-lg-3" for="inputPassword">Password</label>
                    <div class="col-lg-9">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                  </div>
                  <!-- Remember me checkbox and sign in button -->
                  <div class="col-lg-12 col-lg-offset-2">
                    <button type="submit" class="btn btn-danger">Sign in</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                  </div>
                  <br />
                </form>

              </div>
            </div>

            <div class="widget-foot">
              Sistem Penunjang Keputusan Pemilihan Konten Iklan Terbaik
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- JS -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>