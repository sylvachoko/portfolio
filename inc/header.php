<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-YHLBZJ2WHR"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-YHLBZJ2WHR');
  </script>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $pageTitle ?></title>

  <!--Main css-->
  <link rel="stylesheet" href="<?php echo $folder ?>css/style.css?v=3" />
  <!-- <link rel="stylesheet" href="<?php echo $folder ?>css/mobile.css?v=2" />
    <link rel="stylesheet" href="<?php echo $folder ?>css/dark.css?v=1" /> -->

  <!-- font -->
  <link rel="stylesheet" href="<?php echo $folder ?>font/stylsheet.css" />

  <!-- Primary Meta Tags -->
  <meta name="title" content="Sylva Nwachokor — Designer">
  <meta name="keywords" content="Web Designer in Nigeria, Sylva Nwachokor, Sylva Design, Website Developer, Product Designer">
  <meta name="description" content="Personal website of Sylva Nwachokor. UI/UX Developer, Front-End Developer, Digital Product Designer, eLearning Developer and Problem Solver.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $folder ?>img/favicon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $folder ?>img/favicon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $folder ?>img/favicon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $folder ?>img/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $folder ?>img/favicon.png">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://sylva.design">
  <meta property="og:title" content="Sylva Nwachokor — Designer">
  <meta property="og:description" content="Personal website of Sylva Nwachokor. UI/UX Developer, Front-End Developer, Digital Product Designer, eLearning Developer and Problem Solver.">
  <meta property="og:image" content="https://sylva.design/img/og.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://sylva.design">
  <meta property="twitter:title" content="Sylva Nwachokor — Designer">
  <meta property="twitter:description" content="Personal website of Sylva Nwachokor. UI/UX Developer, Front-End Developer, Digital Product Designer, eLearning Developer and Problem Solver.">
  <meta property="twitter:image" content="https://sylva.design/img/og.png">


  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
  <header>
    <nav class="nav">
      <div class="navbar">
        <a href="/" class="logo"><img src="<?php echo $folder ?>img/logo.svg" alt="Sylva Nwachokor Favicon" /></a>
        <div class="nav-right">
          <div class="nav-links">
            <a href="<?php echo $folder ?>work" class="nav-link">Work</a>
            <a href="<?php echo $folder ?>about" class="nav-link">About</a>
            <a href="<?php echo $folder ?>contact" class="nav-link">Contact</a>
          </div>
          <button class="nav-toggle"><span></span><span></span></button>
        </div>
      </div>
    </nav>
  </header>