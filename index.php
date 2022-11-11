<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/uploads/favicon.ico">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <form action="php/login.php" method="post">
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">

                    <h3 class="mb-5">Office Management</h3>
                    
                    <?php if (isset($_GET['error'])) { ?>
                    <p class="alert alert-danger"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    

                    <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX-2">User Name</label>
                    <input type="text" name="uname" id="typeEmailX-2" class="form-control form-control-lg" placeholder="User Name"/>
                    </div>

                    <div class="form-outline mb-4">
                    <label class="form-label" for="typePasswordX-2">Password</label>
                    <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" placeholder="Password" />
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                    <!-- <hr class="my-4">

                    <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;"
                    type="submit"><i class="fab fa-google me-2"></i> Public View</button>
                    -->

                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    </form>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
  </body>
</html>