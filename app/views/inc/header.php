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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/3.0.0/css/buttons.dataTables.css">
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
      #para,
      #printBtn,
      #reglink {
        display: none;
      }

      #print {
        margin: 0.1cm;
      }
    }

    /*Parsley validate*/
    input.parsley-error,
    select.parsley-error,
    textarea.parsley-error {
      border-color: #D43F3A;
      box-shadow: none;
    }

    input.parsley-error:focus,
    select.parsley-error:focus,
    textarea.parsley-error:focus {
      border-color: #D43F3A;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #FF8F8A;
    }

    input.parsley-success,
    select.parsley-success,
    textarea.parsley-success {
      border-color: #398439;
      box-shadow: none;
    }

    input.parsley-success:focus,
    select.parsley-success:focus,
    textarea.parsley-success:focus {
      border-color: #398439;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 6px #89D489
    }

    .parsley-errors-list {
      list-style-type: none;
      padding-left: 0;
      margin-top: 5px;
      margin-bottom: 0;
    }

    .parsley-errors-list.filled {
      color: #D43F3A;
      opacity: 1;
    }

    .paragraph {
      overflow: hidden;
      height: 6rem;
      line-height: 1.5rem;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 5;
      text-overflow: ellipsis;
      display: block;
    }
  </style>
</head>

<body>
  <?php require APPROOT . '/views/inc/navbar.php'; ?>