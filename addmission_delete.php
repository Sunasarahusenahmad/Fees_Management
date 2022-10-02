
<?php include 'connection.php'; ?>

<?php

$register_no = $_GET['register_no'];
// echo '<pre>';
// print_r($id);
// exit;

$delete_query = "DELETE FROM `addmission` WHERE register_no = $register_no";

$result = mysqli_query($con, $delete_query);

if ($result) {
    header("Location: addmission_list.php");
} else {
?>
    <script>
        alert('Please try Again... Data is not Deleted.')
    </script>
<?php
}

?>