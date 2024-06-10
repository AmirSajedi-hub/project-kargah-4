<html>

<head>
    <link href="index.css" rel="stylesheet" type="text/css">
</head>

<?php
session_start();
if (isset($_SESSION['check']))
{
    $name = $_SESSION['f_name'].' '.$_SESSION['l_name'];
    $id = $_SESSION['id'];
    if (file_exists("image/$id.jpg"))
    {
        echo "
    <div class='main_menu' style='margin-left: auto'>
    <p>جبر خطی</p>
    <ul>
        <li class='menu_bar' style='float: right; width: 50px'>
            <i class='fa-solid fa-bars' style='color: #292929;'></i>
            <div>
                <ul>
                <a href='index_loged.php'><li><i class='fa-solid fa-house'></i></li></a>
                <a href='gaos1.php'><li>روش حذفی گاوس</li></a>
                <a href='lu1.php'><li>روش تجریه LU </li></a>
                <a href='Reversibility1.php'><li>بررسی معکوس پذیری ماتریس</li></a>
            </ul>
            </div>
            
            
        </li>
    <a>
        <li style='float: left; width: 120px'>
            <div style='float: left; margin-top: 5px; margin-left: 5px;'>
            <img src='image/$id.jpg' class='image_head'>
            </div>
            <div style='float: left; height: 100%; line-height: 40px; margin-left: 7px'>
            $name 
            </div>
            <div class='menu2'>
                <ul>
                    <a href='user_info.php'>
                        <li>
                            پروفایل
                        </li>
                    </a>
                    <a href='index.php'>
                        <li>
                            خروج
                        </li>
                    </a>
                </ul>
            </div>
        </li>
    </a>
    <a>
        <li style='float: left;'>
            ID: $id 
        </li>
    </a>
</ul>
</div>";
    }
    else
    {
        echo "
    <div class='main_menu' style='margin-left: auto'>
    <p>جبر خطی</p>
    <ul>
        <li class='menu_bar' style='float: right; width: 50px'>
            <i class='fa-solid fa-bars' style='color: #292929;'></i>
            <div>
                <ul>
                <a href='index_loged.php'><li><i class='fa-solid fa-house'></i></li></a>
                <a href='gaos1.php'><li>روش حذفی گاوس</li></a>
                <a href='lu1.php'><li>روش تجریه LU </li></a>
                <a href='Reversibility1.php'><li>بررسی معکوس پذیری ماتریس</li></a>
            </ul>
            </div>
            
            
        </li>
    <a>
        <li style='float: left; width: 120px'>
            <div style='float: left; margin-top: 20px; margin-left: 5px;'>
            <i class='fa-solid fa-circle-user fa-xl' style='color: #2e2e2e;'></i>
            </div>
            <div style='float: left; height: 100%; line-height: 40px; margin-left: 7px'>
            $name 
            </div>
            <div class='menu2'>
                <ul>
                    <a href='user_info.php'>
                        <li>
                            پروفایل
                        </li>
                    </a>
                    <a href='index.php'>
                        <li>
                            خروج
                        </li>
                    </a>
                </ul>
            </div>
        </li>
    </a>
    <a>
        <li style='float: left;'>
            ID: $id 
        </li>
    </a>
</ul>
</div>";
    }

}
else
{
    $pdo = require_once ('connection.inc');
    require ('check_for_login.inc');

    $check = check($_POST['username'] , $_POST['password'] , $pdo);

    if ($check[1] == false )
    {
        echo "
    <div class='main_menu'>
    <p>جبر خطی</p>
    <ul>
    <a href='loging.php'>
        <li>
            ورود
        </li>
    </a>
    <a href='signing.php'>
        <li>ثبت نام</li>
    </a>
</ul>
</div>";
    }
    else
    {
        $user = $check[2];

        $_SESSION['check'] = true;
        $_SESSION['f_name'] = $user['f_name'];
        $_SESSION['l_name'] = $user['l_name'];
        $_SESSION['id'] = $user['id'];
        $_SESSION['birthday'] = $user['birthday'];
        $_SESSION['username'] = $user['user_name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['phone'] = $user['phone'];
        $name = $_SESSION['f_name'].' '.$_SESSION['l_name'];
        $id = $_SESSION['id'];
        if (file_exists("image/$id.jpg"))
        {
            echo "
    <div class='main_menu' style='margin-left: auto'>
    <p>جبر خطی</p>
    <ul>
        <li class='menu_bar' style='float: right; width: 50px'>
            <i class='fa-solid fa-bars' style='color: #292929;'></i>
            <div>
                <ul>
                <a href='index_loged.php'><li><i class='fa-solid fa-house'></i></li></a>
                <a href='gaos1.php'><li>روش حذفی گاوس</li></a>
                <a href='lu1.php'><li>روش تجریه LU </li></a>
                <a href='Reversibility1.php'><li>بررسی معکوس پذیری ماتریس</li></a>
            </ul>
            </div>
            
            
        </li>
    <a>
        <li style='float: left; width: 120px'>
            <div style='float: left; margin-top: 5px; margin-left: 5px;'>
            <img src='image/$id.jpg' class='image_head'>
            </div>
            <div style='float: left; height: 100%; line-height: 40px; margin-left: 7px'>
            $name 
            </div>
            <div class='menu2'>
                <ul>
                    <a href='user_info.php'>
                        <li>
                            پروفایل
                        </li>
                    </a>
                    <a href='index.php'>
                        <li>
                            خروج
                        </li>
                    </a>
                </ul>
            </div>
        </li>
    </a>
    <a>
        <li style='float: left;'>
            ID: $id 
        </li>
    </a>
</ul>
</div>";
        }
        else
        {
            echo "
    <div class='main_menu' style='margin-left: auto'>
    <p>جبر خطی</p>
    <ul>
        <li class='menu_bar' style='float: right; width: 50px'>
            <i class='fa-solid fa-bars' style='color: #292929;'></i>
            <div>
                <ul>
                <a href='index_loged.php'><li><i class='fa-solid fa-house'></i></li></a>
                <a href='gaos1.php'><li>روش حذفی گاوس</li></a>
                <a href='lu1.php'><li>روش تجریه LU </li></a>
                <a href='Reversibility1.php'><li>بررسی معکوس پذیری ماتریس</li></a>
            </ul>
            </div>
            
            
        </li>
    <a>
        <li style='float: left; width: 120px'>
            <div style='float: left; margin-top: 20px; margin-left: 5px;'>
            <i class='fa-solid fa-circle-user fa-xl' style='color: #2e2e2e;'></i>
            </div>
            <div style='float: left; height: 100%; line-height: 40px; margin-left: 7px'>
            $name 
            </div>
            <div class='menu2'>
                <ul>
                    <a href='user_info.php'>
                        <li>
                            پروفایل
                        </li>
                    </a>
                    <a href='index.php'>
                        <li>
                            خروج
                        </li>
                    </a>
                </ul>
            </div>
        </li>
    </a>
    <a>
        <li style='float: left;'>
            ID: $id 
        </li>
    </a>
</ul>
</div>";
        }
    }
}

?>









</html>