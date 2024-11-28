<?php
session_start();
?>
<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="views/dist/img/apple-icon.png">
  <link rel="icon" type="image/png" href="views/dist/img/favicon.png">
  <title>
    Wodmate
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="views/dist/css/nucleo-icons.css" rel="stylesheet" />
  <link href="views/dist/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="views/dist/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="views/dist/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="views/dist/css/css-creado.css">
</head>

<body class="">

<!--Solo cuando estoy logeado va a funcionar -->
  <?php
  if (!isset($_SESSION["validar"]) == true) {

    //include "views/modules/navegador.php";

    $modulos = new Enlaces();
    $modulos->enlacesController();
  } else {

    include "modules/ingreso.php";
    include "modules/registro.php";
  }
  ?>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="views/dist/js/core/popper.min.js"></script>
  <script src="views/dist/js/core/bootstrap.min.js"></script>
  <script src="views/dist/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="views/dist/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="views/dist/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>


</html>