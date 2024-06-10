<html>
<head>
    <title>پروفایل</title>
    <link href="index.css" type="text/css" rel="stylesheet">
    <link href="signing.css" rel="stylesheet" type="text/css">
    <link href="user.info.css" type="text/css" rel="stylesheet">
    <link href="fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">
</head>

<body>
<header>
    <?php
    require('header_login.inc');
    ?>
</header>

<?php
$f_name = $_SESSION['f_name'];
$l_name = $_SESSION['l_name'];
$id = $_SESSION['id'];
$birthday = $_SESSION['birthday'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
?>
<div class="title_form">پروفایل</div>
<div class="back_info">
    <?php
    if (file_exists("image/$id.jpg"))
    {
        echo "
        <div>
        <img src='image/$id.jpg' class='image_top'>
        </div>";
    }
    else
    {
        echo "
        <div>
        <i class='fa-solid fa-circle-user fa-2xl' style='color: #2e2e2e;'></i>
        </div>
        ";
    }
    ?>
    <div class="show_id">
        <?php
        echo "ID:&nbsp; $id";
        ?>
    </div>

    <table class="person_info">
        <tr>
            <td>
                <div>
                    <?php
                    echo "نام:&nbsp;&nbsp;   $f_name";
                    ?>
                </div>
            </td>
            <td>
                <div>
                    <?php
                    echo "نام خانوادگی:&nbsp;&nbsp;   $l_name";
                    ?>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                    <?php
                    echo "تاریخ تولد:&nbsp;&nbsp;   $birthday";
                    ?>
                </div>
            </td>
            <td>
                <div>
                    <?php
                    echo "ایمیل:&nbsp;&nbsp;   $email";
                    ?>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div>
                    <?php
                    echo "شماره همراه:&nbsp;&nbsp;   $phone";
                    ?>
                </div>
            </td>
            <td>
                <div>
                    <?php
                    echo "نام کاربری:&nbsp;&nbsp;   $username";
                    ?>
                </div>
            </td>
        </tr>
    </table>


</div>

<footer>
    <?php
    require ('footer.inc');
    ?>
</footer>
</body>

</html>

