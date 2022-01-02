<?php include_once('boot.php'); ?>
<!doctype html>
<html lang="en" class="font-body text-subtleText">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Letweb UI Kit</title>
    <link rel="stylesheet" href="./fonts/poppins/stylesheet.css">
    <link rel="stylesheet" href="./css/mmenu-light.css">
    <link rel="stylesheet" href="./css/splide-core.min.css">
    <link rel="stylesheet" href="./css/select2.min.css">
    <link rel="stylesheet" href="./css/fancybox.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="relative" x-data="{ atTop: true, activeSearch: false, openForm:false, openThanks:false }" x-on:scroll.window="atTop = (window.pageYOffset > 250 ? false : true)">