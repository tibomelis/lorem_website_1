<?php
/*
    Auteur:         Tibo Melis
    Omschrijving:   Een opdracht van MaxServ
    Datum:          9/1/2022
    Bestand:        De html code voor de website
*/
session_start();
$lang = (empty($_SESSION['lang']) ? 'nl' : $_SESSION['lang']);
include "/Users/tibom/maxserv/Opdracht1_website/src/variables/variables_$lang.php";

?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Lorem</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ### Bootstrap ###-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ### Eigen links ### -->
    <!-- css -->
    <link rel="stylesheet" href="/Opdracht1_website/sass/style.css">
    <!-- js -->
    <script src="/Opdracht1_website/js/main.js" defer></script>
    <!-- icon -->
    <link rel="shortcut icon" href="images/lorem-logo.png">
</head>

<body>
<div class="body-2 container-lg container-fluid">
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/overlays.html'; ?>
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/nav.php'; ?>
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/articles/intro.php'; ?>
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/projects/projects.php'; ?>
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/articles/articles_container.php'; ?>
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/footer_links.php' ?>
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/footer.php' ?>
</div>
</body>

</html>
