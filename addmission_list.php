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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

                            <div class="card-header text-center" style="font-weight: bolder;">Addmission List

                                <div class="float-start">
                                    <button class="btn btn-success rounded-0">
                                        <a href="active.php" class="text-light text-decoration-none"> Active </a>
                                    </button>

                                    <button class="btn btn-danger rounded-0">
                                        <a href="deactive.php" class="text-light text-decoration-none">
                                            Deactive </a>
                                    </button>

                                    <button class="btn btn-primary rounded-0">
                                        <a href="complete.php" class="text-light text-decoration-none">
                                            Complete </a>
                                    </button>
                                </div>

                            </div>
                            <div class="card-body">

                                <div class="table-responsive">

                                    <button type="button" class="btn btn-primary float-end mb-2 rounded-0"><a href="addmission.php" class="text-light" style="text-decoration: none;"><i class="fa fa-plus"></i> Add Admission</a></button>

                                    <table class="table border mb-0">
                                        <thead class="table-light fw-semibold">
                                            <tr class="align-middle">
                                                <th>Roll No</th>
                                                <th>Student Name</th>
                                                <th class="text-center">Contact No</th>
                                                <th>Student Address</th>
                                                <th>Your Courses</th>
                                                <th>Edit</th>
                                                <th>Status</th>
                                                <th>Pay Fees</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php

                                            $select_query = "SELECT  `register_no`, `roll_no`, `student_name`, `father_contact_no_2`, `student_address`, `courses`, `status` FROM `addmission` ";

                                            $result = mysqli_query($con, $select_query);

                                            $num = mysqli_num_rows($result);

                                            while ($data = mysqli_fetch_array($result)) {
                                            ?>
                                                <tr class="align-middle">

                                                    <td class="text-center"> <a href="addmission_personaldetails.php?register_no=<?php echo $data['register_no']; ?>" class="text-dark" style="text-decoration: none;"> <?= $data['roll_no']; ?> </td>

                                                    <td> <a href="addmission_personaldetails.php?register_no=<?php echo $data['register_no']; ?>" class="text-dark" style="text-decoration: none;"> <?= $data['student_name']; ?> </td>

                                                    <td class="text-center"> <a href="addmission_personaldetails.php?register_no=<?php echo $data['register_no']; ?>" class="text-dark" style="text-decoration: none;"> <?= $data['father_contact_no_2']; ?> </td>

                                                    <td> <a href="addmission_personaldetails.php?register_no=<?php echo $data['register_no']; ?>" class="text-dark" style="text-decoration: none;"> <?= $data['student_address']; ?> </td>

                                                    <td> <a href="addmission_personaldetails.php?register_no=<?php echo $data['register_no']; ?>" class="text-dark" style="text-decoration: none;"> <?= $data['courses']; ?> </td>

                                                    <td class="text-center"> <button data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"> <a href="addmission_edit.php?register_no=<?php echo $data['register_no']; ?> " class=" text-dark"><i class="fa fa-edit"> </i> </a> </button> </td>

                                                    <td class="text-center">
                                                        <?php

                                                        if ($data['status'] == 0) {
                                                        ?>

                                                            <a href="addmission_active_deactive.php?register_no=<?php echo $data['register_no'] ?>&status=1 "><button><i class="fa fa-check text-success"></i></button> </a>

                                                        <?php
                                                        } else if ($data['status'] == 1) {
                                                        ?>

                                                            <a href="addmission_active_deactive.php?register_no=<?php echo $data['register_no'] ?>&status=2"> <button><i class="fa fa-times text-danger"></i></button> </a>

                                                        <?php
                                                        } else {
                                                        ?>

                                                            <a href="addmission_active_deactive.php?register_no=<?php echo $data['register_no'] ?>&status=0"> <button><i class="fa fa-copyright text-primary"></i></button> </a>

                                                        <?php
                                                        }

                                                        ?>
                                                    </td>

                                                    <td class="text-center"> <button data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"> <a href="addmission_fees_pay.php?register_no=<?php echo $data['register_no']; ?> " class=" text-dark"> <i class="fa-brands fa-cc-amazon-pay"></i></a> </button> </td>

                                                </tr>

                                            <?php
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>

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