<?php include 'connection.php';

session_start();

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
    <title>Valudas Technology Park</title>
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

    <!-- <link rel="stylesheet" href="print.css"> -->


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
                            <div class="card-header text-center" style="font-weight: bolder;">Student Details


                                <div class=" float-end">

                                    <i onclick="window.print();" style="cursor: pointer;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Print" class="fa-solid fa-print"></i>


                                </div>

                            </div>

                            <div class="card-body ">

                                <div class="body flex-grow-1 px-4">
                                    <div class="container-lg">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="card mb-4">

                                                    <div class="card-header text-center" style="font-weight: bolder;">Payment Entry </div>


                                                    <div class="card-body">

                                                        <div class="table-responsive">

                                                            <table class="table border mb-2">
                                                                <thead class="table-light fw-semibold">
                                                                    <tr class="align-middle">
                                                                        <th>Receive By</th>
                                                                        <th>Payment Mode</th>
                                                                        <th>Paid Amount Date</th>
                                                                        <th>Paid Amount</th>
                                                                        <th>Edit</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <?php

                                                                    $roll_no = $_GET['roll_no'];

                                                                    $select_query = "SELECT * FROM `addmission_fees` WHERE roll_no = $roll_no";

                                                                    $result = mysqli_query($con, $select_query);

                                                                    $res = mysqli_query($con, "SELECT addmission_fees FROM `addmission` ");

                                                                    $data = mysqli_fetch_array($res);

                                                                    // $num = mysqli_num_rows($result);

                                                                    while ($adata = mysqli_fetch_array($result)) {
                                                                    ?>
                                                                        <tr>
                                                                            <td><?php echo $adata['recieve_by'] ?></td>

                                                                            <td><?php echo $adata['payment_mode'] ?></td>

                                                                            <td><?php echo $adata['payment_date'] ?></td>

                                                                            <td style="color: #6FBE44;"><?php echo $adata['pay_fees']; ?></td>

                                                                            <td> <a href="addmission_fees_personal_edit.php?pay_fees=<?php echo $arrdata['pay_fees']; ?> " class=" text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"> <i class="fa fa-edit"></i></a></td>

                                                                        </tr>

                                                                    <?php

                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table>

                                                            <div class="col-md-6">
                                                                <div class="card mb-4">
                                                                    <div class="card-body">
                                                                        <?php
                                                                        $r = mysqli_query($con, "SELECT SUM(pay_fees) AS pay_fees FROM addmission_fees WHERE roll_no = $roll_no");
                                                                        $row = mysqli_fetch_array($r);

                                                                        echo "<span style='font-weight: bold;'> Total Amount is : <span>" . "<span style=' color: #6FBE44;'>" . $row['pay_fees'] . "</span>";


                                                                        error_reporting(0);


                                                                        echo "<br><span style='font-weight: bold;'> Remaining Amount is : <span>" . "<span style=' color: red;'>" . $remaining_amount = $data['addmission_fees'] - $row['pay_fees'];

                                                                        ?>

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

                                <!-- <div class="text-center" style="color: #6FBE44;">

                                    Your Roll No is : <span><?= $arrdata['roll_no']; ?></span>
                                    Your Paid Amount is : <span><?= $arrdata['pay_fees']; ?></span>
                                </div> -->

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