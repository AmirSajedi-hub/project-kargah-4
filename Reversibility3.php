<html dir="rtl">
<head>
    <title>معکوس پذیری</title>
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

<?php
require ('matrix.inc');
$number = $_POST['number'];
$mat_temp = array(array());
$answers = array();
for ($i = 0 ; $i < $number ; $i++)
{
    for ($j = 0; $j < $number ; $j++)
    {
        $mat_temp[$i][$j] = $_POST["x$i$j"];
    }
}

for ($i = 0 ; $i < $number ; $i++)
{
    $answers [$i] = 1;
}

$mat = new matrix($mat_temp , $answers , $number);
$mat ->set_number($number);
$mat ->set_mat($mat_temp);
$mat_temp = $mat -> get_mat();

?>

<div class='result'>
    <?php
    echo "ماتریس ورودی به صورت زیر است:";
    echo "<br>";
    ?>
    <table class="show_matrix">
        <?php
        for ($i = 0 ; $i < $number ; $i++)
        {
            ?>
            <tr>
                <?php
                for ($j = 0 ; $j < $number ; $j++)
                {
                    $test = $mat_temp[$i][$j];
                    echo "<td style='padding: 3px;'>$test</td>";
                }

                ?>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
    echo "<hr>";
    $mat -> satre_moghadamati_det();
    $mat_satr = $mat -> get_mat_satr();
    $determinant = $mat -> determinant();
    echo "ماتریس حاصل از عملیات سطری مقدماتی:";
    echo "<br>";
    ?>
    <table class="show_matrix">
        <?php
        for ($i = 0 ; $i < $number ; $i++)
        {
            ?>
            <tr>
                <?php
                for ($j = 0 ; $j < $number ; $j++)
                {
                    $test = $mat_satr[$i][$j];
                    echo "<td style='padding: 3px;'>$test</td>";
                }

                ?>
            </tr>
            <?php
        }
        ?>
    </table>
    <hr>
    <?php
    echo "محاسبه دترمینان ماتریس:";
    echo "<br>";
    echo "$determinant &nbsp;&nbsp;";
    ?>

    <div style="display: inline-block;">
        <i class="fa-solid fa-equals" style="color: #000000;"></i>
    </div>
    <table class="show_matrix" style="border-top: none; border-bottom: none;">
        <?php
        for ($i = 0 ; $i < $number ; $i++)
        {
            ?>
            <tr>
                <?php
                for ($j = 0 ; $j < $number ; $j++)
                {
                    $test = $mat_satr[$i][$j];
                    echo "<td style='padding: 3px;'>$test</td>";
                }

                ?>
            </tr>
            <?php
        }
        ?>
    </table>
    <hr>
    <?php
    if ($determinant == 0)
    {
        echo "ماتریس معکوس پذیر نیست!!!";
    }
    else
    {
        echo "ماتریس معکوس پذیر است.";
    }
    ?>
    <br>
</div>
<footer>
    <?php
    require ('footer.inc');
    ?>
</footer>
</body>
</html>

