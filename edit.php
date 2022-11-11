<!-- Redirect to login page if the user has Logout i.e. if session has expired  -->
<?php
    include "php/validate_login.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <?php include "navbar/view_employee.php" ?>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  </head>
  <body>
    <div class="container-fluid">
    <div class="row justify-content-center">
    <div class="row mb-4 card p-3" style= "margin: 4px 0 0 0;"">
        <?php
            $id = $_GET['id'];
        ?>
        <?php
            include "db_conn.php";
            $query="SELECT * From officers where id = $id";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);
    
        ?> 
        <!-- <form>// action="guestdetailsphp.php" method="get" > -->
        <form action="php/edit.php" method="post" enctype="multipart/form-data">

       
        <!-- 2 column grid layout with text inputs for the first and last names -->.
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example6">ID</label>
                <input type="text" value="<?php echo $data['id'] ; ?>"   id="form6Example6" class="form-control" disabled/>
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example1">Name <sup style="color:red;">*</sup></label>
                <input type="text" value="<?php echo $data['name'] ; ?>" name="name" id="form6Example1" class="form-control" />
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example5">Designation</label>
                <input type="text" value="<?php echo $data['designation'] ; ?>" name="designation" id="form6Example5" class="form-control" />
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example2">Contact Number <sup style="color:red;">*</sup></label>
                <input type="number" value="<?php echo $data['contact_no'] ; ?>" name="contact_no" id="form6Example2" class="form-control" />
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example3">Place Of Posting</label>
                <input type="text" value="<?php echo $data['place_of_posting'] ; ?>" name="place_of_posting" id="form6Example3" class="form-control" />
            </div>
            </div>
            <div class="col">
            <div class="form-outline">      
                <label class="form-label" for="form6Example6">Qualification</label>
                <input type="text"value="<?php echo $data['qualification'] ; ?>"  name="qualification"  id="form6Example6" class="form-control" />
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">      
                <label class="form-label" for="form6Example6">Date Of Joining</label>
                <input type="date" value="<?php echo $data['date_of_joining'] ; ?>" name="date_of_joining"  id="form6Example6" class="form-control" />
            </div>
            </div>
            <div class="col">
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example6">Date Of Birth</label>
                <input type="date" value="<?php echo $data['date_of_birth'] ; ?>" name="date_of_birth"  id="form6Example6" class="form-control" />
            </div>
            </div>
        </div>
       
        
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <label class="form-label" for="form6Example6">Permanent Address</label>
                <input type="text"  value="<?php echo $data['permanent_address'] ; ?>" name="permanent_address" id="permanent_address" class="form-control" />
            </div>
            </div>
            <div class="col">
            <div class="form-outline">      
                <label class="form-label" for="form6Example21">Present Address</label>
                <input type="text" value="<?php echo $data['present_address'] ; ?>" name="present_address"  id="form6Example6" class="form-control" />
            </div>
            </div>
        </div>


        <?php
                if($data['image_file'])   {     
                $result = $data['image_file'];
        ?>
        `    <div class="row mb-0">
                <div class="col-md-4">
                <div class="form-outline">
                <?php
                    $result = $data['image_file'];
                ?>
                <img class="img-thumbnail" alt="Responsive image" src="uploads/<?php echo $result; ?>">
                </div>
                </div>
        `    </div>
        <?php
        }
        ?>

        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example6">Profile Image</label>
            <input type="file" value="<?php echo $data['image_file'] ; ?>"  name="image_file"  id="form6Example6" class="form-control" />
        </div>

        <button name="id" value="<?php echo $data['id']; ?>" type="submit" class="btn btn-primary btn-block mb-4">Edit Guest</button>
        </form>
    
    </div>
    </div>
    </div>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
  </body>
</html>