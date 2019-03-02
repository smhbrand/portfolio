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
    <section class="about">
        <h1 class="about">ABOUT</h1>
        <p>
        <i>"This website serves as an addition to my resume and can be seen as an introduction to who I am."</i><br>
        <br>
        <br>
        Dear reader,<br>
        <br>
        My name is Sheila Marie Hornido-Brand. Born and raised in Cotabato City, Philippines.<br>
        Since 2018, I am residing in Tilburg, the Netherlands together with my family.<br>
        I am married to <a class="about" href="https://imfalath.github.io/Introduction-Website/">Edo Brand</a> and have a son named Giovanni Xander since 2017.<br>
        <br>
        I graduated as Bachelor of Science in Business Administration major in Financial Management. As of now, I am<br>
        processing my University records. Once they are here, I want to find a job which is inclined to my degree.<br>
        My personal job top 3 is:
        <ol>
            <li>Administration - Financial</li>
            <li>Banking - Investments, Loans</li>
            <li>Project Management - Events, Conferences, Branding.</li>
        </ol>
        Of course, I am open to any good job offer.
        </p>
    </section>
    
<!-- Footer -->

<footer><?php echo "Sheila Marie Brand © ".date('Y')?></footer>
</body>
</html>