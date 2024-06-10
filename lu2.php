<html dir="rtl">
<head>
    <title>حل معادله به روش تجریه LU</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="signing.css" rel="stylesheet" type="text/css">
    <link href="gaos.css" rel="stylesheet" type="text/css">
    <link href="fontawesome-free-6.4.0-web/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome-free-6.4.0-web/css/brands.css" rel="stylesheet">
    <link href="fontawesome-free-6.4.0-web/css/solid.css" rel="stylesheet">
    <script src="default_value.js">
    </script>
</head>
<body>
<header>
    <?php
    require ("header_login.inc");
    ?>
</header>

<?php
$number = $_POST['number'];
echo "

";
?>

<form method="post" action="lu3.php">
    <fieldset class='get_number'>
        <label for='number'>تعداد معادلات:</label>
        <?php
        echo "<input type='number' value='$number' name='number' id='number' readonly>";
        ?>
    </fieldset>
    <fieldset class="get_Equations">
        <legend style="direction: rtl; text-align: right; padding-left: 7px; padding-right: 7px;">ضرایب مجهولات را وارد کنید.</legend>
        <?php
        for ($i = 0 ; $i < $number ; $i++)
        {
            for ($j = 0 ; $j < $number ; $j++)
            {
                $j_temp = $j+1;
                echo "
                <input type='number' name='x$i$j' id='x$i$j' step='any' required>
                <label for='x$i$j'>x<sub>$j_temp</sub></label>
                ";
                if ($j != $number-1)
                {
                    echo "+";
                }
            }
            echo "
            = <input type='number' name='g$i' id='g$i' step='any' required>
            <br>
            
            ";
        }
        ?>
    </fieldset>
    <div class='space_button' style='width: 100%; text-align: center; margin-top: 20px'>
        <input type="checkbox" id="default-check" name="default-check" onclick="defaultchecked()">
        <label for="default-check"> پر کردن با مقادیر سوال</label><br><br>
        <input type='submit' value='تایید' class='style_submit'>
    </div>
</form>
<footer>
    <?php
    require ('footer.inc');
    ?>
</footer>
</body>
</html>

