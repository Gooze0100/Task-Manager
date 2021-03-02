<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.typekit.net/wjj8mlr.css" />
    <!-- Font-family: Nunito -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <!-- Font-family: Ubuntu -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet" />
    <!-- Font-awesome icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <?php
    if ($title === 'Login/Register') {
        echo '<script defer src="../JS/login.js"></script>';
    } else if ($title === 'Profile') {
        echo '<script defer src="../JS/profile.js"></script>';
    } else if ($title === 'Weather') {
        echo '<script defer src="../JS/weather.js"></script>';
    } else {
        echo '<script defer src="../JS/main.js"></script>';
    }
    ?>
    <title><?php echo $title ?></title>
</head>

<body>
    <section class="backgrounds"></section>