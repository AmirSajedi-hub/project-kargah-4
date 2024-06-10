<html dir="rtl">
<head>
    <title>حل معادلات جبر خطی</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="index_body.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <?php
        session_start();
        session_unset();
        session_destroy();
        require("header_no_login.inc");
        ?>
    </header>
    <main style="width: 100%;">

        <div class="smart_butten">
            <div style="border-top-left-radius:25px "></div>
            <div style="border-top-right-radius:25px "></div>
            <div style="border-bottom-left-radius:25px "></div>
            <div style="border-bottom-right-radius:25px "></div>
            <span>
            <button type="button" onclick="alert('ابتدا وارد شوید!!!')">حل معادلات به روش حذفی گاوس</button>
            <button type="button" onclick="alert('ابتدا وارد شوید!!!')">حل معادله به روش تجزیه LU</button>
            <button type="button" onclick="alert('ابتدا وارد شوید!!!')">بررسی معکوس پذیری ماتریس</button>
            <button type="button" onclick="alert('ابتدا وارد شوید!!!')">به زودی ...</button>
        </span>
        </div>
    </main>

    <?php
    /*
    include "class.phpmailer.php";
    include "class.smtp.php";

    $mail=new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'mail.beporsam.ir';
    $mail->SMTPAuth=true;
    $mail->port=25;

    $mail->Username = 'www.hamed4014@gmail.com';
    $mail->Password = '24081381';
    $mail->setFrom("www.hamed4014@gmail.com","بپرسم");
    $mail->addAddress("hasan.karimi.29454@gmail.com");
    $mail->CharSet= "UTF-8";
    $mail->Subject="سلام";
    $mail->ContentType="text/html";
    $mail->msgHTML("این ایمیل برای امتحان ارسال ایمیل می باشد، این ایمیل از طرف سایت بپرسم ارسال شده است");  $mail->send();
    if(!$mail->send())
    {
        echo "خطا: ایمیل ارسال نشد " . $mail->ErrorInfo;
    }
    else
    {
        echo "ایمیل شما با موفقیت ارسال شد";
    }
    */
    /*
    try {
        $mail -> Host = 'smtp.gmail.com';
        $mail -> SMTPAuth = true;
        $mail -> SMTPSecure = 'ssl';
        $mail -> Port = 465;
        $mail -> Username = "";
        $mail -> Password = "";
        //$mail -> SetFrom("www.hamed4014@gmail.com" , "حامد محمدزاده");
        $mail -> AddAddress("");
        $mail -> Subject = "تست";
        $mail -> ContentType = "text/htm";
        $mail -> MsgHTML("این یام برای تست می باشد.");
        $mail -> Send();
        echo "ایمیل با موفقیت ارسال شد.";
    }
    catch (phpmailerException $e)
    {
        echo $e ->getMessage();
    }
    */

    ?>
<footer>
    <?php
    require ('footer.inc');
    ?>
</footer>

</body>

</html>



<?php



?>