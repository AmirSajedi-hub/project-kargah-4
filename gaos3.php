<html dir="rtl">
<head>
    <title>حل معادله به روش حذفی گاوس</title>
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
    $answers [$i] = $_POST["g$i"];
}

$mat = new matrix($mat_temp , $answers , $number);
$mat ->set_number($number);
$mat ->set_answers($answers);
$mat ->set_mat($mat_temp);
$mat_temp = $mat -> get_mat();
$answers = $mat -> get_answers();

?>

    <div class='result'>
        <?php
        echo "معادله ماتریسی به دست آمده به صورت زیر است:";
        echo "<br>";
        ?>
        <table class="show_matrix">
            <?php
            for ($i = 0 ; $i < $number ; $i++)
            {
                $test = $answers[$i];
                echo "<tr><td style='padding: 3px;'>$test</td></tr>";
            }
            ?>
        </table>
        <div style="display: inline-block;">
            <i class="fa-solid fa-equals" style="color: #000000;"></i>
        </div>
        <table class="show_matrix">
            <?php
            for ($i = 0 ; $i < $number ; $i++)
            {
                $test = $i + 1 ;

                echo "<tr><td style='padding: 2px;'>x<sub>$test</sub></td></tr>";
            }
            ?>
        </table>
        <i class="fa-sharp fa-solid fa-xmark" style="color: #1c1c1c;"></i>
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
        $mat -> satre_moghadamati();
        $mat_satr = $mat -> get_mat_satr();
        $mat_satr_ans = $mat -> get_answers_satr();
        echo "معادله ماتریسی پس از انجام عملیات سطری مقدماتی:";
        echo "<br>";
        ?>
        <table class="show_matrix">
            <?php
            for ($i = 0 ; $i < $number ; $i++)
            {
                $test = $mat_satr_ans[$i];
                echo "<tr><td style='padding: 3px;'>$test</td></tr>";
            }
            ?>
        </table>
        <div style="display: inline-block;">
            <i class="fa-solid fa-equals" style="color: #000000;"></i>
        </div>
        <table class="show_matrix">
            <?php
            for ($i = 0 ; $i < $number ; $i++)
            {
                $test = $i + 1 ;

                echo "<tr><td style='padding: 2px;'>x<sub>$test</sub></td></tr>";
            }
            ?>
        </table>
        <i class="fa-sharp fa-solid fa-xmark" style="color: #1c1c1c;"></i>
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
        $check = $mat -> hal();
        if ($check == 0) {
            $x_array = $mat -> get_x_array();
            echo "جواب مجهولات:";
            echo "<br>";
            echo "<br>";

            for ($i = 0 ; $i < $number ; $i++)
            {
                $i_temp = $i + 1;
                $temp = $x_array[$i];
                echo "x<sub>$i_temp</sub> = $temp";
                if ($i != $number - 1)
                {
                    echo "&nbsp; | &nbsp;";
                }
            }
        }
        else
        {
            if ($check == 1)
            {
                echo "معادله بی نهایت جواب دارد!!!";
            }
            else
            {
                echo "معادله جواب ندارد!!!";
            }

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
