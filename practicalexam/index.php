<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=RocknRoll+One&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <title>Practical Exam - Internship</title>

</head>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign In</p>

                <form id="loginform" method="post" action="controller/login_contr.php" enctype="multipart/form-data" class="mx-1 mx-md-4">

                  <!-- notification view -->
                  <div id="alert"></div>
                  <?php if (isset($_REQUEST['msg'])) { ?>
                    <div id="alert" class="alert alert-danger">
                      <?php echo base64_decode($_REQUEST['msg']); ?>
                    </div>
                  <?php } ?>
                  <!-- notification view ends -->

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" id="form3Example3c" class="form-control" placeholder="Enter Your Email" name="email" id="email" autocomplete="off"/>
                    </div>
                    <div id="ealert"></div>
                    <br>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" placeholder="Password" name="password" id="password"/>
                    </div>
                    <div id="palert"></div>
                    <br>
                  </div>

                  <p>New Account? <a href="register.php">Register</a></p>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Sign In</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="images/img2.png" class="img-fluid"">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="validation.js"></script>
</html>