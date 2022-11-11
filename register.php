<!-- Redirect to login page if the user has Logout i.e. if session has expired  -->
<?php
    include "php/validate_login.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "navbar/view_employee.php" ?>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  </head>
  <body>
    <div class="container-fluid" style= "margin: 4px 0 0 0;">
    <div class="row justify-content-center">
    <div class=" col-lg-6 col-md-8">
    <div class="card p-3 ">
    <form action="php/register_php.php" method="post"  enctype="multipart/form-data" >

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Name <sup style="color:red;">*</sup></label>
                <input type="text" name="name" id="form6Example1" class="form-control" />
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Contact Number <sup style="color:red;">*</sup></label>
                <input type="number" name="contact_no" id="form6Example2" class="form-control" />
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example3">Place Of posting</label>
                <input type="text" name="place_of_posting" id="form6Example3" class="form-control" />
            </div>
            </div>
            <div class="col">
            <div class="form-outline">      
                <label class="form-label" for="form6Example4">Designation</label>
                <input type="text" name="designation" id="form6Example4" class="form-control" />
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example5">Date Of Joining </label>
                <input type="date" name="date_of_joining" id="form6Example5" class="form-control" />
            </div>
            </div>
            <div class="col">
            <div class="form-outline">      
                <label class="form-label" for="form6Example4">Date Of Birth</label>
                <input type="date" name="date_of_birth" id="form6Example4" class="form-control" />
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example6">Permanent Address</label>
                <input type="text" name="permanent_address"  id="form6Example6" class="form-control" />
            </div>
            </div>
            <div class="col">
            <div class="form-outline">      
                <label class="form-label" for="form6Example6">Present Address</label>
                <input type="text" name="present_address"  id="form6Example6" class="form-control" />
            </div>
            </div>
        </div> 
        
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example6">Qualification</label>
                <input type="text"name="qualification"  id="form6Example6" class="form-control" />
            </div>
            </div>
            <div class="col">
            <div class="form-outline">      
                <label class="form-label" >Profile Image</label>
                <input type="file" name="image_file"  class="form-control" />
            </div>
            </div>
        </div> 
       
        <button type="submit" class="btn btn-primary btn-block mb-4">Register Guest</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
  </body>
</html>