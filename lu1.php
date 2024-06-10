<html dir="rtl">
<head>
    <title>حل معادله به روش تجریه LU</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="signing.css" rel="stylesheet" type="text/css">
    <link href="gaos.css" rel="stylesheet" type="text/css">
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
<form action="lu2.php" method="post">
    <fieldset class="get_number">
        <label for="number">تعداد معادلات را وارد کنید:</label>
        <input type="number" min="1" step="1" name="number" id="number" required>
    </fieldset>
    <div class="space_button" style="width: 100%; text-align: center; margin-top: 20px">
        <input type="submit" value="تایید" class="style_submit">
    </div>
</form>





<footer>
    <?php
    require ('footer.inc');
    ?>
</footer>
</body>
</html>

