<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satsatin | <?=$PageTitle;?></title>

    <link rel="icon" type="image/x-icon" href="/week-one/images/logo.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/week-two/assets/stylesheet/stylesheet.css">
    
  </head>
  <body>
    <header>
      <section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <?php
            if($IsLoggedIn == true) {
          ?>
              <a class="navbar-brand" href="<?=base_url('access/dashboard'); ?>">MY DASHBOARD</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link <?php if ($PageTitle == 'Dashboard'){?>active<?php }?>" href="<?=base_url('access/dashboard'); ?>">DASHBOARD<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if ($PageTitle == 'CRUD' || $PageTitle == 'Create' || $PageTitle == 'Edit' || $PageTitle == 'View'){?>active<?php }?>" href="<?=base_url('access/crud'); ?>">CRUD OPERATION</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if ($PageTitle == 'Calculator'){?>active<?php }?>" href="<?=base_url('access/calculator'); ?>">CALCULATOR</a>
                  </li>
                  <li class="nav-item logoutButton active">
                    <a class="nav-link" href="<?=base_url(); ?>">LOGOUT</a>
                  </li>
                </ul>
              </div>
          <?php
            } else {
          ?>
              <a class="navbar-brand" href="<?=base_url(); ?>">MY WEBSITE</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link <?php if ($PageTitle == 'Home'){?>active<?php }?>" href="<?=base_url(); ?>">HOME<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if ($PageTitle == 'Login' || $PageTitle == 'Register'){?>active<?php }?>" href="<?=base_url('pages/login'); ?>">LOGIN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php if ($PageTitle == 'Portfolio'){?>active<?php }?>" href="<?=base_url('pages/portfolio'); ?>">PORTFOLIO</a>
                  </li>
                </ul>
              </div>
          <?php
            }
          ?>
        </nav>
      </section>
    </header>
<main>