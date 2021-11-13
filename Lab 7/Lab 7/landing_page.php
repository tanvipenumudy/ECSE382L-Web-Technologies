<?php
    session_start();  
    if(!isset($_SESSION["sess_user"])){  
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency | OFFERS</title>
    <link rel="stylesheet" href="landing.css">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap');
</style>

<body>

    <div class="header-container">
        <h1 style="text-align: right; width: 100%;">Offers</h1>
        <h2 style="text-align: right; width: 100%;"><?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>
    </div>

    <div class="card-container">
        <div class="card">
            <h3>DIWALI OFFER!!!!!!!!!!!!</h3>
            <p>10% OFF on all bookings</p>
        </div>
    
        <div class="card">
            <h3>HOLI OFFER!!!!!!!!!!!!</h3>
            <p>Flat 50% off on all Flights Bookings.</p>
        </div>
    </div>

</body>
</html>