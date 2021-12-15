<?php ob_start(); ?>
<?php 
session_start(); 
?>
<?php include "../includes/db.php" ?>
<?php include "functions.php" ?>
<?php

     if(!isset($_SESSION['user_role'])){
            header("Location: ../index.php");
        
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fuel Refueling System Admin </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pro.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto+Mono&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!--    <script src="https://cdn.tiny.cloud/1/d2qmr8yiazs16yxvnxnkpek7nwri4rgxqdpnsuy2waubqdiy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>-->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    
    

</head>

<body>