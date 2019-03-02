<?php
date_default_timezone_set("Europe/Amsterdam");
?>
<!DOCTYPE html>
<html lang="NL-nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sheila Marie Brand</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/css.css">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="scripts/js.js"></script>
</head>

<!-- Header.php -->

<header><a href="index.php"><img src="images/logo5.png" alt="SMB logo" title="Home"></a></header>

<!-- Navigation.php -->

<nav role="navigation">
    <?php require_once "scripts/nav.php" ?>
</nav>

<!-- Social Media Bar -->

<?php require_once "scripts/social_media.php" ?>

<!-- Content -->

<body>
    <section class="goals">

    </section>
    
<!-- Footer -->

<footer><?php echo "Sheila Marie Brand © ".date('Y')?></footer>
</body>
</html>