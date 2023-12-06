<?php
session_start();
include('inc/conc.php');
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    $id = $_SESSION['id'];
    $user = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<div class="moving-text">Welcome to  Oblisk Website, Your guide on your tourist trip</div>
    
    
    <button id="Suzer">Suzer</button>
    <iframe  id = "SuzerLocation" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2344.887484942461!2d31.219792831371475!3d29.87025155182069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584bd553b25c81%3A0x8c577a7fabef89d!2z2YfYsdmFINiy2YjYs9ix!5e1!3m2!1sar!2seg!4v1698309655036!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>  
        <script src="home.js"></script>
        <a href="logout.php">Log out</a>
    </body>
    </html>
    
    <?php 

}else{
    header('Location:login.php');
    exit();
}

?>