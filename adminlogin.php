<?php

session_start();
if (!session_destroy()) {
  header("Location : dashboard.php");
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

<html lang="en">

<head>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Valudas_Management_System</title>

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }
  </style>

  <?php include 'connection.php'; ?>

</head>

<body>

  <?php


  if (isset($_POST['submit'])) {

    // $user_id = $_GET['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $login_query = "SELECT * FROM `admin` WHERE username='$username' && password='$password' ";
    $result = mysqli_query($con, $login_query);

    if (mysqli_num_rows($result) == 1) {

      session_start();
      while ($data = mysqli_fetch_array($result)) {
        // $_SESSION['user_id'] = $data['user_id'];
        // echo $_SESSION['user_id'];
       }
        $_SESSION['username'] = $username;
        // $_SESSION['password'] = $_POST['password'];
        header("Location: dashboard.php");
      
    } else {
  ?>
      <script>
        alert('Please try Again... Enter your valid Username/Password.')
      </script>
  <?php
    }
  }

  ?>

  <h2 class="text-center" style="padding-top: 3rem; color:#04AA6D; font-weight: bold;">Login Form</h2>

  <form action="" method="POST" enctype="multipart/form-data">
    <div class="imgcontainer">
      <img src="assets/img/avatars/login_avatar.png" alt="Avatar" style="width: 8rem;">
    </div>

    <div class="container w-25">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

      <button type="submit" name="submit">Login</button>
    </div>
  </form>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundxle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>