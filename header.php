<?php
   $customtitle;
   $customstyle;
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-----Title----->
        <title>
            <?php echo (empty($customtitle)) ? "Puma" : $customtitle; ?>
        </title>
        <!-----Settings----->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-----Styles----->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="nav.css">
        <link rel="stylesheet" href="footer.css">
        <!-----Custom Style-----> 
        <?php echo (empty($customstyle)) ? "" : "<link rel='stylesheet' href=$customstyle>"; ?>       
        <!-----Fonts----->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <!-----Icons----->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!-----Navigation----->
        <?php include "nav.php"?>