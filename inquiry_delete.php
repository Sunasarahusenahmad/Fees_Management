
<?php include 'connection.php'; ?>

<?php

$id = $_GET['id'];
// echo '<pre>';
// print_r($id);
// exit;

$delete_query = "DELETE FROM `inquiry` WHERE id = $id";

$result = mysqli_query($con, $delete_query);

if ($result) {
    header("Location:dashboard.php");
} else {
?>
    <script>
        alert('Please try Again... Data is not Deleted.')
    </script>
<?php
}

?>