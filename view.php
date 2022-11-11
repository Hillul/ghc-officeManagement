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
    <div class="row mb-4">
        <?php
            $id = $_GET['id'];
        ?>
        <!-- / <h3>Guest Details</h3> -->
        <div class="card p-3" style= "margin: 4px 0 0 0;">
        <?php
            include "db_conn.php";
            $query="SELECT * From officers where id = $id";
            // $sql = mysqli_query($conn, "SELECT * From guest_information where guest_id = $id");
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);
            //print_r($data);
    
        ?>  
        <!-- <form>// action="guestdetailsphp.php" method="get" > -->
        <form>
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <?php
                if($data['image_file'])   {     
                $result = $data['image_file'];
        ?>
        <div class="row mb-0">
            <div class="col-md-4">
            <div class="form-outline">
            <?php
                $result = $data['image_file'];
            ?>
            <img class="img-thumbnail" alt="Responsive image" src="uploads/<?php echo $result; ?>">
            </div>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <span><b>Id</b>:</span> <?php echo $data['id']; ?>
            </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <span><b>Name:</b></span> <?php echo $data['name']; ?>
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <span><b>Contact no:</b></span> <?php echo $data['contact_no']; ?>
            </div>
            </div>
        </div>

     
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <span><b>Designation:</b></span> <?php echo $data['designation']; ?>
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <span><b>Date of Joining:</b> </span> <?php echo $data['date_of_joining']; ?>
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <span><b>Qualification :</b></span> <?php echo $data['qualification']; ?>
            </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <span><b>Present address :</b></span> <?php echo $data['present_address']; ?>
            </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
            <div class="form-outline">
                <span><b>Permanent address :</b></span> <?php echo $data['permanent_address']; ?>
            </div>
            </div>
        </div>

        
    </form>
    </div>
    </div>
    </div>
    </div>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
  </body>
</html>