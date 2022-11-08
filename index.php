<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/libraries/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/styles/style.css">
    <script type="text/javascript" src="assets/libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="assets/libraries/jquery/jquery-3.6.0.js"></script>
    <script src="assets/libraries/jquery/jquery-ui.js"></script>
</head>

<body>
    <div id="menuLayer">
        <div class="container pt-3">
            <!--Render head navbar-->
            <?php
            require_once 'controller/C_Navbar.php';
            (new C_Navbar())->getNavbar();
            ?>
        </div>
    </div>

    <div id="contentLayer">
        <div class="container">
        <?php
        require_once 'controller/C_Navbar.php';
        (new C_Navbar())->getStart();
        ?>
        </div>
    </div>

    <div id="footerLayer">
        <div class="container pt-3">
            INI THE BINIGI
        </div>
    </div>
</body>

</html>