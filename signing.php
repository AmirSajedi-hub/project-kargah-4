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

<div class="title_form">ثبت نام</div>
<div class="style_form">
    <form method="post" action="succesfully_signing.php" enctype="multipart/form-data">
        <fieldset>
            <legend>مشخصات فردی</legend>
            <div>
                <label for="f_name">نام:</label>
                <input type="text" name="f_name" id="f_name" autofocus required min="3" max="15">
                <br>

            </div>
            <div>
                <label for="l_name">نام خانوادگی:</label>
                <input type="text" name="l_name" id="l_name" required min="3" max="15">
                <br>
            </div>
            <div>
                <label for="birthday">تاریخ تولد:</label>
                <input type="date" name="birthday" id="birthday" required>
            </div>
            <div>
                <label for="email">email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="phone">شماره همراه:</label>
                <input type="text" name="phone" id="phone" required min="11" max="11">
            </div>
            <div>
                <label for="img"> عکس:</label>
                <input type="file" name="img" id="img">
            </div>
        </fieldset>

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
            <input type="submit" value="تایید" class="style_submit">
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


