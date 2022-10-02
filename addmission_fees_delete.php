<?php include 'connection.php'; ?>

<?php

$roll_no = $_GET['roll_no'];
// echo '<pre>';
// print_r($id);
// exit;

$delete_query = "DELETE FROM `addmission_fees` WHERE roll_no = $roll_no";

$result = mysqli_query($con, $delete_query);
    
if ($result) {
    header("Location: addmission_fees_list.php");
} else {
?>
    <script>
        alert('Please try Again... Data is not Deleted.')
    </script>
<?php
}

?>