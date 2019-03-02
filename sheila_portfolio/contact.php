<?php
date_default_timezone_set("Europe/Amsterdam");
?>
<!DOCTYPE html>
<html lang="En-US">
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
    <section class="contact">
    <form action="mailto:smhbrand@hotmail.com" method="post" enctype="text/plain">
    Name:<br>
    <input class="contact" type="text" name="Name" placeholder="Your name..." required><br>
    Organization:<br>
    <input class="contact" type="text" name="Organization" placeholder="Your name..." optional><br>
    Phone Number:<br>
    <input class="contact" type="tel" name="Phone Number" placeholder="Your phone number..." required><br>
    E-mail:<br>
    <input class="contact" type="email" name="Mail" placeholder="email@server.com" required><br>
    Message:<br>
    <textarea class="contact" rows="4" name="Message" placeholder="Write your message here..."></textarea><br><br>
    <input type="submit" value="Send">
    <input type="reset" value="Reset">
    </form>
    </section>
    <section class="contact2">
    <i><b class="contact">T</b>hank you for visiting my page<br>
    and thank you for your time.<br>
    <br>
    If you are interested in my assets to your company, do not hesitate to fill out the form. I will contact you as soon as possible. Thanks in advance!<br>
    <br>
    <br>
    - Sheila Marie Brand</i>
    </section>
    
<!-- Footer -->

<footer><?php echo "Sheila Marie Brand © ".date('Y')?></footer>
</body>
</html>