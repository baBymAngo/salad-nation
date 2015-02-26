<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Salad Nation</title>

  <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Oswald:300+400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <?= css('assets/css/global.css') ?>
  <?= js('//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js') ?>
</head>
<body class="single">

<header id="header">
  <h1>
    <a href="/"><span id="logo">Salad Nation</span></a> 
  </h1>

  <?php snippet('menu') ?>

  <div class="social-media">
    <a href="#"><i class="fa fa-instagram"></i></a>
    <a href="#"><i class="fa fa-pinterest"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
  </div>
  
   <form id="search" action="<?= $pages->find('search')->url() ?>" method="post" autocomplete="off">
    <input type="text" name="search" placeholder="Search Recipes">
    <i class="fa fa-search"></i>
    <input type="submit">
  </form>
</header>