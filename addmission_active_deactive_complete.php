    
<?php include 'connection.php' ?>


<?php

    

    $register_no = $_GET['register_no'];
    $status = $_GET['status'];
    $update_query = " UPDATE addmission SET status = $status WHERE register_no = $register_no ";
    $result = mysqli_query($con, $update_query);

    header("location:addmission_all.php");
    
?>