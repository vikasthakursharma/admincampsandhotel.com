
<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href=<?php echo e(url('backend/css/app.min.css')); ?>>
  <link rel="stylesheet" href=<?php echo e(url('backend/bundles/bootstrap-social/bootstrap-social.css')); ?>>
  <!-- Template CSS -->
  <link rel="stylesheet" href=<?php echo e(url('backend/css/style.css')); ?>>
  <link rel="stylesheet" href=<?php echo e(url('backend/css/components.css')); ?>>
  <!-- Custom style CSS -->
  <link rel="stylesheet" href=<?php echo e(url('backend/css/custom.css')); ?>>
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>
<body>
        <div class="loader"></div>
        <div id="app">
          <section class="section">
            <div class="container mt-5">
              <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h4>Register</h4>
                    </div>
                    <div class="card-body">
                    <form method="POST" action=<?php echo e(route('backend.register')); ?>>
                        <?php echo csrf_field(); ?>
                        <div class="row">
                          <div class="form-group col-6">
                            <label for="frist_name">Name</label>
                            <input id="frist_name" type="text" class="form-control" name="name" autofocus>
                          </div>
                          <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email">
                                <div class="invalid-feedback">
                                </div>
                              </div>
                        </div>

                        <div class="row">
                          <div class="form-group col-6">
                            <label for="password" class="d-block">Password</label>
                            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                              name="password">
                            <div id="pwindicator" class="pwindicator">
                              <div class="bar"></div>
                              <div class="label"></div>
                            </div>
                          </div>

                        </div>

                        <div class="form-group">
                          <button type="submit" class="btn btn-primary btn-lg btn-block">
                            Register
                          </button>
                        </div>
                      </form>
                    </div>
                    <div class="mb-4 text-muted text-center">
                      Already Registered? <a href="auth-login.html">Login</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
         <!-- General JS Scripts -->
  <script src=<?php echo e(url('backend/js/app.min.js')); ?>></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src=<?php echo e(url('backend/js/scripts.js')); ?>></script>
  <!-- Custom JS File -->
  <script src=<?php echo e(url('backend/js/custom.js')); ?>></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>

<?php /**PATH C:\xampp\htdocs\admincampsandhotel.com\resources\views/backend/register.blade.php ENDPATH**/ ?>