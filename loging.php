<html dir="rtl">
<head>
    <title>ثبت نام</title>
    <link href="index.css" type="text/css" rel="stylesheet">
    <link href="signing.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <?php
    require('header_no_login.inc');
    ?>
</header>
<div class="title_form">ورود</div>
<div class="style_form">
    <form method="post" action="index_loged.php">
        <fieldset>
            <legend>مشخصات حساب کاربری</legend>
            <div>
                <label for="username">نام کاربری:</label>
                <input type="text" name="username" id="username" required min="3" max="15">
                <br>

            </div>
            <div>
                <label for="password">رمز عبور:</label>
                <input type="password" name="password" id="password" required min="8" max="20">
                <br>
            </div>
        </fieldset>
        <div class="space_button">
            <input type="submit" value="ورود" class="style_submit">
        </div>

    </form>
</div>
<footer>
    <?php
    require ('footer.inc');
    ?>
</footer>
</body>
</html>
