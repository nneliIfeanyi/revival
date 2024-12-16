<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet" />
  <!-- Animate.css -->
  <link rel="stylesheet" href="<?= URLROOT; ?>/css/animate.css" />
  <!-- Icomoon Icon Fonts-->
  <link href="<?php echo URLROOT; ?>/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?= URLROOT; ?>/css/bootstrap.css" />
  <!-- Flexslider -->
  <link rel="stylesheet" href="<?= URLROOT; ?>/css/flexslider.css" />
  <!-- Flexslider -->
  <link rel="stylesheet" href="<?= URLROOT; ?>/css/magnific-popup.css" />
  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="<?= URLROOT; ?>/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="<?= URLROOT; ?>/css/owl.theme.default.min.css" />

  <!-- Theme style  -->
  <link rel="stylesheet" href="<?= URLROOT; ?>/css/styles.css" />
  <title><?php echo SITENAME; ?></title>
  <style type="text/css">
    @media print {
      @page {
        margin: 0 10mm 0 10mm;
      }

      /* 
            html {
                margin: 0px;
            }

            body {
                margin: 10mm 15mm 10mm 15mm;
            } */
      .header *,
      #footer *,
      #printBtn {
        display: none;
      }

      #print {
        margin: 0.1cm;
      }
    }
  </style>
</head>

<body>
  <?php require APPROOT . '/views/inc/navbar.php'; ?>