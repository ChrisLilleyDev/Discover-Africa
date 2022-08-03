<?php include('config/constants.php'); ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Discover Africa</title>
</head>

<body>
  <header class="fixed-top">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <div class="container-fluid">
        <a href=<?=SITEURL?> class="navbar-brand ms-2">
          <div class="d-inline-block align-text-top" style="height: 35px; width: 35px;">
            <img src="img/home/logo.png" role="img" alt="logo" height="35px">
          </div>
          Discover Africa
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"
          aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav align-items-end ms-auto pe-3">
            <li class="nav-item">
              <a href=<?=SITEURL?> class=<?=$currentPage==='home' ?'"nav-link active" aria-current="page"':'nav-link'?>>Home</a>
            </li>
            <li class="nav-item">
              <a href="<?=SITEURL?>animals.php" class=<?=$currentPage==='animals' ?'"nav-link active" aria-current="page"':'nav-link'?>>Animals</a>
            </li>
          </ul>
          <div class="navbar-nav flex-row justify-content-end ms-auto">
            <a href="#" class="nav-link btn btn-success px-3">Sign In</a>
            <a href="#" class="nav-link btn btn-outline-success px-3 ms-2 mx-md-3">Register</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
