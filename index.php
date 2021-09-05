<?php
if (isset($_POST["recaptchaResponse"]) && !empty($_POST["recaptchaResponse"]))
{
    $secret = "6Lf28UYcAAAAAG-_9Es5TVvaJrQ0gJRqXfz-tj4H";
    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$_POST["recaptchaResponse"]);
    $reCAPTCHA = json_decode($verifyResponse);
    if ($reCAPTCHA->success)
    {
      echo "認証成功";
    }
    else
    {
      echo "認証エラー";
    }
}
else
{
    echo "エラー";
}
?>
