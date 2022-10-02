<?php include 'connection.php' ?>

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
    <title>Valudas_Management_System</title>
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
                            <div class="card-header text-center" style="font-weight: bolder;">Edit Data</div>
                            <div class="card-body">

                                <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-6">
                                                <div class="card mb-4 mx-4">
                                                    <div class="card-body p-4">
                                                        <form action="" method="POST">

                                                            <?php

                                                            $id = $_GET['id'];
                                                            // echo '<pre>';
                                                            // print_r($id);
                                                            // exit;

                                                            $select_query = "SELECT * FROM `inquiry` where id={$id} ";

                                                            $result = mysqli_query($con, $select_query);

                                                            $arrdata = mysqli_fetch_array($result);

                                                            if (isset($_POST['update'])) {
                                                                $idupdate = $_GET['id'];
                                                                $student_name = $_POST['student_name'];
                                                                $father_name = $_POST['father_name'];
                                                                $surname = $_POST['surname'];
                                                                $contact_no = $_POST['contact_no'];
                                                                $contact_no_2 = $_POST['contact_no_2'];
                                                                $address = $_POST['address'];
                                                                $date_of_birth = $_POST['date_of_birth'];
                                                                $email = $_POST['email'];
                                                                $courses = $_POST['courses'];
                                                                $inquiry_type = $_POST['inquiry_type'];
                                                                $reference = $_POST['reference'];

                                                                $update_query = "UPDATE `inquiry` SET student_name = '$student_name', father_name = '$father_name', surname = '$surname', contact_no = '$contact_no', contact_no_2 = '$contact_no_2', address = '$address', date_of_birth = '$date_of_birth', email = '$email', courses = '$courses', inquiry_type = '$inquiry_type', reference = '$reference' WHERE id = '$idupdate' ";

                                                                $res = mysqli_query($con, $update_query);

                                                                if ($res) {
                                                            ?>
                                                                    <div class="alert alert-success" role="alert">
                                                                        Data Updated Successfully !...
                                                                    </div>
                                                                <?php
                                                                    // header("Location : index.php");
                                                                } else {
                                                                ?>
                                                                    <div class="alert alert-danger" role="alert">
                                                                        Data Not Updated !...
                                                                    </div>
                                                            <?php
                                                                }
                                                            }

                                                            ?>

                                                            <h1>Edit Data</h1>
                                                            <p class="text-medium-emphasis">Edit your Data</p>
                                                            <div class="input-group mb-3"><span class="input-group-text">
                                                                    <svg class="icon">
                                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>

                                                                    </svg></span>
                                                                <input class="form-control" type="text" name="student_name" value="<?= $arrdata['student_name']; ?>" required>
                                                            </div>

                                                            <div class="input-group mb-3"><span class="input-group-text">
                                                                    <svg class="icon">
                                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>

                                                                    </svg></span>
                                                                <input class="form-control" type="text" name="father_name" value="<?= $arrdata['father_name']; ?>" required>
                                                            </div>

                                                            <div class="input-group mb-3"><span class="input-group-text">
                                                                    <svg class="icon">
                                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>

                                                                    </svg></span>
                                                                <input class="form-control" type="text" name="surname" value="<?= $arrdata['surname']; ?>" required>
                                                            </div>

                                                            <div class="input-group mb-3"><span class="input-group-text">
                                                                    <svg class="icon">
                                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-phone"></use>

                                                                    </svg></span>
                                                                <input class="form-control" type="text" name="contact_no" maxlength="10" value="<?= $arrdata['contact_no']; ?>" required>
                                                            </div>

                                                            <div class="input-group mb-3"><span class="input-group-text">
                                                                    <svg class="icon">
                                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-phone"></use>

                                                                    </svg></span>
                                                                <input class="form-control" type="text" name="contact_no_2" maxlength="10" value="<?= $arrdata['contact_no_2']; ?>" required>
                                                            </div>

                                                            <div class="input-group mb-3"><span class="input-group-text">
                                                                    <svg class="icon">
                                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                                                    </svg></span>
                                                                <input class="form-control" type="text" name="address" value="<?= $arrdata['address']; ?>" required>
                                                            </div>

                                                            <div class="input-group mb-3"><span class="input-group-text">
                                                                    <svg class="icon">
                                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                                                    </svg></span>
                                                                <input class="form-control" type="date" name="date_of_birth" value="<?= $arrdata['date_of_birth']; ?>" required>
                                                            </div>

                                                            <div class="input-group mb-3"><span class="input-group-text">
                                                                    <svg class="icon">
                                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                                                    </svg></span>
                                                                <input class="form-control" type="email" name="email" value="<?= $arrdata['email']; ?>" required>
                                                            </div>

                                                            <div class="input-group mb-3"><span class="input-group-text">
                                                                    <svg class="icon">
                                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                                                    </svg></span>
                                                                <select id="inputState" name="courses" class="form-select" value="<?= $arrdata['courses']; ?>" required>
                                                                    <option disabled selected>Select Courses</option>
                                                                    <option>Wordpress Development</option>
                                                                    <option>Opencart Development</option>
                                                                    <option>Mobile Application Development</option>
                                                                    <option>Digital Marketing</option>
                                                                </select>
                                                            </div>

                                                            <div class="input-group mb-3"><span class="input-group-text">
                                                                    <svg class="icon">
                                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                                                    </svg></span>
                                                                <select id="inputState" name="inquiry_type" class="form-select" value="<?= $arrdata['inquiry_type']; ?>" required>
                                                                    <option disabled selected>Select Inquiry Type</option>
                                                                    <option>Addmission</option>
                                                                    <option>Job</option>
                                                                    <option>Information</option>
                                                                </select>
                                                            </div>

                                                            <div class="input-group mb-3"><span class="input-group-text">
                                                                    <svg class="icon">
                                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                                                    </svg></span>
                                                                <select id="inputState" name="reference" class="form-select" value="<?= $arrdata['reference']; ?>" required>
                                                                    <option disabled selected>Select Reference</option>
                                                                    <option>Valuda Aakib</option>
                                                                    <option>Valuda Noman</option>
                                                                    <option>Bhoraniya Mujahid</option>
                                                                </select>
                                                            </div>

                                                            <button class="btn btn-block btn-success rounded-0" type="submit" name="update">Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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