<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJDrones</title>
    <link rel="stylesheet" type="text/css" href="view/resources/css/style.css">   
    
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <!-- LOGO -->
    <header>
        <div class="logo"><a href="index.php">AJDrones</a></div>
    </header>

    <!-- BARRA DE UTILIDADES -->
    <div id="tool-bar">
        <?php
            require_once "controller/utility_bar.php";
        ?>
    </div>

    <!-- PHP -->
    <div id="container">
        <?php 
            require_once "controller/login_result.php";
            require_once "controller/category_list.php";
        ?>
    </div>

    <!-- FOOTER -->
    <footer>
        <p>&copy;Universitat Autònoma de Barcelona</p>
    </footer>
    <script src="js/functions.js"></script> 
</body>
</html>
