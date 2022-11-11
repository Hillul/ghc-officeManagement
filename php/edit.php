<?php 

session_start(); 
include "../db_conn.php";


    $id =  $_POST['id'];
    $employee_name =  $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $designation =  $_POST['designation'];
    $place_of_posting = $_POST['place_of_posting'];
    $date_of_birth = $_POST['date_of_birth'];
    $date_of_joining =  $_POST['date_of_joining'];
    $qualification = $_POST['qualification'];
    $present_address  =  $_POST['present_address'];
    $permanent_address = $_POST['permanent_address'];
    $image_file = $_POST['image_file'];

    $img_name = $_FILES['image_file']['name'];
	$img_size = $_FILES['image_file']['size'];
	$tmp_name = $_FILES['image_file']['tmp_name'];
	$error = $_FILES['image_file']['error'];

  

    $new_img_name;
    $sql;
	if ($error === 0) {
		// if ($img_size > 125000) {
		// 	$em = "Sorry, your file is too large.";
		//     header("Location: index.php?error=$em");
		// }else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = '../uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

		    }
        $sql = "Update officers SET name ='$employee_name', contact_no ='$contact_no', designation ='$designation',place_of_posting ='$place_of_posting',
        date_of_birth ='$date_of_birth', date_of_joining  ='$date_of_joining', qualification ='$qualification', present_address ='$present_address',
        permanent_address ='$permanent_address', image_file  ='$new_img_name' where id='$id'";
            
	//}
    }else{
        $sql = "Update officers SET name ='$employee_name', contact_no ='$contact_no', designation ='$designation',place_of_posting ='$place_of_posting',
        date_of_birth ='$date_of_birth', date_of_joining  ='$date_of_joining', qualification ='$qualification', present_address ='$present_address',
        permanent_address ='$permanent_address' where id='$id'";   
    }

    
    // Performing insert query execution
    // here our table name is guest_information
    // = '".$newname."' WHERE cid = '".$int."'"
    //$sql = "Update officers SET name ='$employee_name' where id =1"; 
    // $sql = "Update officers SET name ='$employee_name', contact_no ='$contact_no', designation ='$designation',place_of_posting ='$place_of_posting',
    // date_of_birth ='$date_of_birth', date_of_joining  ='$date_of_joining', qualification ='$qualification', present_address ='$present_address',
    //  permanent_address ='$permanent_address', image_file  ='$new_img_name' where id='$id'";
    
    if(mysqli_query($conn, $sql)){
        header("Location: ../home.php");
        exit();
    } else{
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }
    
    // Close connection
    mysqli_close($conn);