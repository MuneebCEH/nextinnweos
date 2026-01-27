<!DOCTYPE html>
<html lang="en">

<head>
  <title>Nextinn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="images/favicon.png">
  <style>
    * {
      font-family: 'Plus Jakarta Sans', sans-serif;
    }

    :root {
      --primary-color-1: #D1D1D1 !important;
      --color-1: #D1D1D1 !important;
      --color-5: #1F1F1F !important;
      --color-2: #8B8B8B !important;
      --clr1: #D1D1D1 !important;
      --clr2: #FFFFFF !important;
      --clr3: #C82AEF !important;
      --clr4: #8B8B8B !important;
      --clr5: white !important;
      --clr6: #988b8b !important;
      --clr7: black !important;
      --clr8: #0e0e0e !important;
      --clr9: #BCBCBC !important;
      --clr10: #7A7A7A !important;
      --th-bg-color-2: #0E0E0E !important;
      --th-bg-clr-3: #040404 !important;
    }

    body {
      background-color: black;
    }

    /* Utility Classes */
    .margin-left-minus-9 {
      margin-left: -9px;
    }

    .font-bold {
      font-weight: bold;
    }

    .font-bold-7 {
      font-weight: 700;
    }

    .p-r {
      position: relative !important;
    }

    .in-bl {
      display: inline-block !important;
    }

    .m-t-2 {
      margin-top: 2px;
    }

    .ml5 {
      margin-left: 5px;
    }

    .mt70 {
      margin-top: 70px
    }

    .p-b-70 {
      padding-bottom: 70px;
    }

    .br20 {
      border-radius: 20px;
    }

    .p14 {
      padding: 14px;
    }

    /* Utility Classes */



    /* Header */
    .header .d1 {
      background-color: #0e0e0e;
      margin-left: 14px;
      margin-top: 14px;
      max-width: 98%;
    }

    .header .logo {
      margin-top: 6px;
    }

    .header nav ul li a {
      color: #D1D1D1 !important;
    }

    .header nav ul li ul {
      background-color: black !important;
      border: 1px solid #bb18d1;
    }

    .header nav ul li ul li {}

    .header nav ul li ul li a {
      color: #D1D1D1 !important;
    }

    .header nav ul li ul li a:hover {
      /* border-bottom: 1px solid #bb18d1; */
      background-color: transparent !important;
      font-weight: 500;
    }

    .header .contact-d {
      border-radius: 30px;
      background-color: black;
      padding: 4px 0px;
      max-width: 202px;
      box-shadow: -3px -2px 3px #c82aef;
    }

    .header .contact-d .phone-d {
      background-color: #C82AEF;
      width: 38px;
      padding: 6px 10px;
      border-radius: 23px;
      margin-left: 5px;
      display: inline-block;
    }

    .header .contact-d .phone-d i {
      color: white !important;
      font-size: 25px;
    }

    .header .contact-d .number-d {
      display: inline-block;
    }

    .header .contact-d .number-d span {
      color: #D1D1D1;
      margin-left: 9px;
    }

    /* Header */

    /*Home Section 2*/

    .h-sc2 {
      border-bottom: 1px solid var(--color-5);
    }

    .h-sec2 {
      background-image: url('images/bg-img-1.png');
      background-repeat: no-repeat;
      background-size: cover
    }

    .h-sec2 h1.margin-top {
      margin-top: 58px;
    }

    .h-sec2 h1 {
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 86px;
      max-width: 1043px;
      color: #D1D1D1;
      background: linear-gradient(to right, #ffffff, #988b8b, black);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .h-sec2 .p1 {
      color: #8B8B8B;
      max-width: 598px;
    }

    .h-sec2 .p2 {
      color: #8B8B8B;
      text-align: justify;
      font-size: 14px;
    }

    .get-started {
      border-radius: 30px;
      background-color: black;
      padding: 4px 0px;
      max-width: 202px;
      box-shadow: -3px -2px 3px #c82aef;
    }

    .get-started .phone-d {
      background-color: #C82AEF;
      width: 38px;
      padding: 6px 10px;
      border-radius: 23px;
      margin-left: 17px;
      display: inline-block;
    }

    .get-started .phone-d i {
      color: white !important;
      font-size: 25px;
    }

    .get-started .number-d {
      display: inline-block;
      margin-left: 22px;
    }

    .get-started .number-d span {
      color: #D1D1D1;
      margin-left: 9px;
    }

    .person-images {
      max-width: 53px;
      border: 4px solid #c82aef;
      border-radius: 27px;
    }

    .h-sec2 .positive-reviews {
      color: var(--primary-color-1);
      max-width: 166px;
    }

    .h-sec2 .per-imgs-d {
      top: -15px;
    }

    /*Home Section 2*/


    @media (min-width: 992px) {
      .navbar .dropdown:hover .dropdown-menu {
        display: block;
        margin-top: 0;
      }
    }

    @media screen and (max-width: 575px) {
      .header .logo-container {
        max-width: 144px;
        margin: auto;
      }

      nav .container .collapse-container {
        max-width: 58px;
        margin: auto;
      }

      .h-sec11 .sec2 input.form-control.email-input {
        width: 100%;
      }

      .header .contact-d-container {
        max-width: 203px;
        margin: auto;
      }

      .text-center-m {
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <div class="container-fluid">

    <?php
    include "header.php";
    ?>

    <div class="row">
      <h1>About</h1>
    </div>

    <?php
    include "footer.php";
    ?>
    <div class="row" style="margin-top:20px;">
      <div class="col-lg-12"></div>
    </div>

  </div>

</body>

</html>