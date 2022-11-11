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
    <?php include "navbar/home.php" ?>
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  </head>
  <body>
    <!-- <link href=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css rel=stylesheet>
    <link href=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/dataTables.bootstrap.min.css rel=stylesheet>
     -->
    <?php
      include('db_conn.php');
      $query = "SELECT * FROM officers";
      $result = mysqli_query($conn, $query);
      ?>
          <div class="container-fluid" style= "margin: 4px 0 0 0;">
      <div class="card p-3 ">
      <h1>Employee List</h1>

      <table id="dtBasicExample" class="table " cellspacing="0" width="100%">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Designation</th>
              <th scope="col">Contact Number</th>
              <th scope="col">Qualification</th>
              <th scope="col">Present Address</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <?php
          if (mysqli_num_rows($result) > 0) {
            while($data = mysqli_fetch_assoc($result)) {
              ?>
              <tbody>
                <tr>
                  <th scope="row"><?php echo $data['id']; ?></th>
                  <td><?php echo $data['name']; ?> </td>
                  <td><?php echo $data['designation']; ?> </td>
                  <td><?php echo $data['contact_no']; ?> </td>
                  <td><?php echo $data['qualification']; ?> </td>
                  <td><?php echo $data['present_address']; ?> </td>

                  <td><a type ="button" href="view.php?id=<?php echo $data['id']; ?>"><button style= "background-color: #4CAF50"> View </button></a>
                  <a href="edit.php?id=<?php echo $data['id']; ?>"><button style= "background-color: #008CBA"> Edit </button></a>
                  <a href="php/delete.php?id=<?php echo $data['id']; ?>"><button style= "background-color: #FF0000"> Delete </button></a>

          
                </tr>
              </tbody>
            <?php
            }} else { ?>
              <tr>
              <td colspan="8">No data found</td>
              </tr>
          <?php } ?>
        </table>
            </div>
            </div>
            
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="/asset/style.css"></script>
    <script src="/asset/javascript.css"></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js></script><script src=https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/dataTables.bootstrap.min.js></script> -->

  </body>
</html>