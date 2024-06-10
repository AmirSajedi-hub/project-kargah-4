<html dir="rtl">
<head>
    <title>حل معادلات جبر خطی</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="index_body.css" rel="stylesheet" type="text/css">
    <link href="fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">
</head>
<body>
<header>
    <?php
    require ("header_login.inc");
    ?>
</header>
<main style="width: 100%;">

    <div class="smart_butten">
        <div style="border-top-left-radius:25px "></div>
        <div style="border-top-right-radius:25px "></div>
        <div style="border-bottom-left-radius:25px "></div>
        <div style="border-bottom-right-radius:25px "></div>
        <span>
            <a href="gaos1.php">
                <button>حل معادلات به روش حذفی گاوس</button>
            </a>
            <a href="lu1.php">
                <button>حل به روش تجزیه LU</button>
            </a>
            <a href="Reversibility1.php">
                <button>بررسی معکوس پذیری ماتریس</button>
            </a>
            <a>
                <button>به زودی ...</button>
            </a>
        </span>
    </div>
</main>
<footer>
    <?php
    require ('footer.inc');
    ?>
</footer>
</body>

</html>



<?php



?>