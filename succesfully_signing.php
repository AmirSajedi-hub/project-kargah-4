<html>
<head>
    <title>ثبت نام</title>
    <link href="index.css" type="text/css" rel="stylesheet">
</head>

<body>
<header>
    <?php
    require('header_no_login.inc');
    ?>
</header>

<?php
$pdo = require_once('connection.inc');
$user = ['f_name' => $_POST['f_name'] ,
'l_name' => $_POST['l_name'] ,
'phone' => $_POST['phone'] ,
'email' => $_POST['email'] ,
'birthday' => $_POST['birthday'] ,
'username' => $_POST['username'] ,
'password' => $_POST['password'] ];

require('check.inc');

$check = check ($user , $pdo);
if ($check[0] == false )
{
    echo '<div class="message">
    نام کاربری وارد شده قبلا ثبت شده است.
</div>
    ';
}
if ($check[1] == false )
{
    echo '<div class="message">
    شماره همراه وارد شده قبلا ثبت شده است.
</div>
    ';
}
if ($check[2] == false )
{
    echo '<div class="message">
    ایمیل وارد شده قبلا ثبت شده است.
</div>
    ';
}

if ($check[2] && $check[1] && $check[0]) {
    $sql = "INSERT INTO users (f_name , l_name , phone , email , birthday , user_name , password)
VALUES (:f_name , :l_name , :phone , :email , :birthday , :username , :password)";


    $statment = $pdo -> prepare($sql);

    $statment -> execute ([
        ':f_name' => $user['f_name'] ,
        ':l_name' => $user['l_name'] ,
        ':phone' => $user['phone'] ,
        ':email' => $user['email'] ,
        ':birthday' => $user['birthday'] ,
        ':username' => $user['username'] ,
        ':password' => $user['password']
    ]);
    $id = $pdo -> lastinsertid();
    if (isset($_FILES['img']))
    {
        if ((($_FILES["img"]["type"] == "image/gif")
                || ($_FILES["img"]["type"] == "image/jpeg")
                || ($_FILES["img"]["type"] == "image/jpg")
                || ($_FILES["img"]["type"] == "image/pjpeg")
                || ($_FILES["img"]["type"] == "image/x-png")
                || ($_FILES["img"]["type"] == "image/png"))
            && ($_FILES["img"]["size"] < 200000000000))
        {
            if (file_exists("image/" . $_FILES["img"]["name"])){
                echo "نام فایل عکس را تغییر دهید.";
            }
            else
            {
                $new_name = "$id.jpg";
                move_uploaded_file($_FILES["img"]["tmp_name"],
                    "image/" . $new_name);
            }
        }
    }

    echo "<div class='message'>
    ثبت نام با موفقیت انجام شد.
</div>
<div class='message'>
    
    ID: $id
    
</div>";
}

else
{
    echo "
    <a href='loging.php'><div class='botten_div1'>ورود</div></a>
    <a href='signing.php'><div class='botten_div2'>ثبت نام</div></a>
    

    
    
    ";
}
?>

<footer>
    <?php
    require ('footer.inc');
    ?>
</footer>
</body>

</html>
