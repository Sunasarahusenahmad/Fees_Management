<?php


include 'connection.php';

if (isset($_POST['submit'])) {

    $register_no = $_POST['register_no'];
    $roll_no = $_POST['roll_no'];
    $student_name = $_POST['student_name'];
    $father_name = $_POST['father_name'];
    $surname = $_POST['surname'];
    $mother_name = $_POST['mother_name'];
    $father_contact_no = $_POST['father_contact_no'];
    $father_contact_no_2 = $_POST['father_contact_no_2'];
    $date_of_birth = $_POST['date_of_birth'];
    $student_address = $_POST['student_address'];
    $village_city = $_POST['village_city'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $gender = $_POST['gender'];
    $courses = $_POST['courses'];
    $joining_date = $_POST['joining_date'];
    $addmission_fees = $_POST['addmission_fees'];
    $addmission_type = $_POST['addmission_type'];

    if (isset($_FILES['student_image'])) {

        $file_name = $_FILES['student_image']['name'];
        $file_size = $_FILES['student_image']['size'];
        $file_tmp = $_FILES['student_image']['tmp_name'];
        $file_type = $_FILES['student_image']['type'];

        if (move_uploaded_file($file_tmp, "image_assets/" . $file_name)) {
?>
            <!-- <div class="alert alert-success text-center" role="alert">
                Student_image is Uploaded !...
            </div> -->
        <?php
        } else {
        ?>
            <div class="alert alert-danger text-center" role="alert">
                Student_image Dose't Uploaded !...
            </div>
        <?php
        }
    }

    $query = mysqli_query($con, "SELECT * FROM `addmission` WHERE register_no = '$register_no' ");
    if (mysqli_num_rows($query) > 0) {

        ?>
        <div class="alert alert-danger text-center" role="alert">
            <?php print  $register_no . ' <=== Regular No is Already Exist, Please Another Try !...' ?>
        </div>
        <?php

    } else {
        $insert_query = "INSERT INTO `addmission` (register_no, roll_no, student_name, father_name, surname, mother_name, father_contact_no, father_contact_no_2, date_of_birth, student_address, village_city, district, state, pincode, gender, courses, joining_date, addmission_fees, addmission_type, student_image) VALUES ('$register_no', '$roll_no', '$student_name', '$father_name', '$surname', '$mother_name', '$father_contact_no', '$father_contact_no_2', '$date_of_birth', '$student_address', '$village_city', '$district', '$state', '$pincode', '$gender', '$courses', '$joining_date', '$addmission_fees', '$addmission_type', '$file_name')";

        $result = mysqli_query($con, $insert_query);

        if ($result) {
        ?>
            <div class="alert alert-success text-center" role="alert">
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger text-center" role="alert">
                Data Dose't Inserted !...
            </div>
<?php
        }
    }
}

?>


<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.0
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Crud</title>
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="css/examples.css" rel="stylesheet">

    <!-- bootstrap link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font-awesome link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css" integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">


</head>

<body style="font-family: arial; font-size: 15px;">

    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <h2>Valudas</h2>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item"><a class="nav-link" href="dashboard.php">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                    </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>

            <li class="nav-item"><a class="nav-link" href="inquiry_list.php">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-address-book"></use>
                    </svg> Inquiry</a></li>

            <li class="nav-item"><a class="nav-link" href="active.php">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-playlist-add"></use>
                    </svg> Addmission</a></li>
            </li>
            <li class="nav-item"><a class="nav-link" href="feeslist.php">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-playlist-add"></use>
                    </svg> Addmission Fees</a></li>
            </li>
        </ul>
    </div>


    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                    </svg></a>

                <span class="" style="font-size: 2.5rem; font-weight: 700; color: #6FBE44;">
                    Valudas Technology Park
                </span>


                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/valuda.png" alt="admin@email.com">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <a class="dropdown-item" href="logout.php">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                </svg>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>


        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-4">
                            <div class="card-header text-center" style="font-weight: bolder;">Addmission Now</div>
                            <div class="card-body bg-light">

                                <form class="row g-3" method="POST" enctype="multipart/form-data">
                                    <div class="col-md-3">
                                        <label for="inputEmail4" class="form-label">Register No</label>
                                        <input type="text" name="register_no" class="form-control" id="inputEmail4" placeholder="Register No" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword4" class="form-label">Roll No</label>
                                        <input type="text" name="roll_no" class="form-control" id="inputPassword4" placeholder="Roll No" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword4" class="form-label">Student Name</label>
                                        <input type="text" name="student_name" class="form-control" id="inputPassword4" placeholder="Student Name" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword4" class="form-label">Father Name</label>
                                        <input type="text" name="father_name" class="form-control" id="inputPassword4" placeholder="Father Name" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputAddress" class="form-label">Surname</label>
                                        <input type="text" name="surname" class="form-control" id="inputAddress" placeholder="Surname" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputPassword4" class="form-label">Mother Name</label>
                                        <input type="text" name="mother_name" class="form-control" id="inputPassword4" placeholder="Mother Name" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputAddress2" class="form-label">Father Contact No</label>
                                        <input type="text" name="father_contact_no" class="form-control" id="inputAddress2" placeholder="Father Contact No" maxlength="10" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputAddress2" class="form-label">Alternate Father Contact No</label>
                                        <input type="text" name="father_contact_no_2" class="form-control" id="inputAddress2" placeholder="Alternate Father Contact No" maxlength="10" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputAddress" class="form-label">Date of Birth</label>
                                        <input class="form-control" id="date" name="date_of_birth" placeholder="MM/DD/YYYY" type="date" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputAddress" class="form-label">Student Address</label>
                                        <input type="text" name="student_address" class="form-control" id="inputAddress" placeholder="Student Address" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputAddress" class="form-label">Village / City</label>
                                        <input type="text" name="village_city" class="form-control" id="inputAddress" placeholder="Village / City" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputAddress" class="form-label">District</label>
                                        <input type="text" name="district" class="form-control" id="inputAddress" placeholder="District" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputAddress" class="form-label">State</label>
                                        <input type="text" name="state" class="form-control" id="inputAddress" placeholder="State" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputAddress" class="form-label">Pincode</label>
                                        <input type="text" name="pincode" class="form-control" id="inputAddress" placeholder="Pincode" maxlength="6" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputState" class="form-label">Gender</label>
                                        <select id="inputState" name="gender" class="form-select" required>
                                            <option disabled selected>Select Gender Type</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputState" class="form-label">Courses</label>
                                        <select id="inputState" name="courses" class="form-select" required>
                                            <option disabled selected>Select Courses</option>
                                            <option>Wordpress Development</option>
                                            <option>Opencart Development</option>
                                            <option>Mobile Application Development</option>
                                            <option>Digital Marketing</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputAddress" class="form-label">Joining Date</label>
                                        <input class="form-control" id="date" name="joining_date" placeholder="MM/DD/YYYY" type="date" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputAddress" class="form-label">Addmission Fees</label>
                                        <input type="text" name="addmission_fees" class="form-control" id="inputAddress" placeholder="Addmission Fess" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="inputState" class="form-label">Addmission Type</label>
                                        <select id="inputState" name="addmission_type" class="form-select" required>
                                            <option disabled selected>Select Addmission Type</option>
                                            <option>Regular Addmission</option>
                                            <option>Unregular Addmission</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="formFile" class="form-label">Student Image</label>
                                        <input class="form-control" type="file" name="student_image" id="formFile" required>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-primary rounded-0">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>
                <!-- /.row-->
            </div>
        </div>

        <footer class="footer">
            <div class="ms-auto">Designed by &nbsp; <a href="https://husenahmad.github.io/husenahmad/">Sunasara
                    Husenahmad</a></div>
        </footer>
    </div>

    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.min.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>