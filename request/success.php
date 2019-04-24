<?php
if ($_POST['phone']> '')
{
$name = $_POST['name'];
$phone = $_POST['phone'];

$url = $_SERVER['HTTP_HOST'];

$to = "denysrobets@gmail.com";//

$header = "Content-type: text/plain; charset=UTF-8\r\n";
$header .= "From: $to\r\n";
$header .= "MIME-Version: 1.0\r\n";

$title = "Заявка с сайта $url";
$message = "Имя: $name \nТелефон: $phone";

$mail = mail($to, $title, $message, $header);
}
?>

<!DOCTYPE html>
<html lang="ru">
    <head>

        <meta charset="utf-8">
        <title>Поздравляем! Ваша заявка принята!</title><script>fbq('track', 'Lead');</script>
        <style type="text/css">
            body {
                line-height: 1;
                height: 100%;
                font-family: Arial;
                font-size: 15px;
                color: #313e47;
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                background: url('bg-ok.png');
            }
            h2 {
                margin: 0;
                padding: 0;
                font-size: 36px;
                line-height: 44px;
                color: #313e47;
                text-align: center;
                font-weight: bold;
            }
            a {
                color: #69B9FF;
            }
            .list_info li span {
                width: 150px;
                display: inline-block;
                font-weight: bold;
                font-style: normal;
            }
            .list_info {
               text-align: left;
               display: inline-block;
               list-style: none;
               margin-top: -10px;
               margin-bottom: -11px;
            }
            .list_info li {
                margin: 11px 0px;
            }
            .fail {
                margin: 10px 0 20px 0px;
                text-align: center;
            }
            .email {
                position: relative;
                text-align: center;
                margin-top: 40px;
            }
            .email input {
                height: 30px;
                width: 200px;
                font-size: 14px;
                padding-right: 10px;
                padding-left: 10px;
                outline: none;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: 1px solid #B6B6B6;
                margin-bottom: 10px;
            }
            .block_success {
                max-width: 960px;
                padding: 70px 30px 70px 30px;
                margin: -50px auto;
            }
            .success {
                text-align: center;
            }
        </style>        
    </head>
    <body>

        <div class="block_success">					
            <h2 style="text-transform: uppercase;">Поздравляем! Ваша заявка принята!</h2>
            <p class="success">
                В ближайшее время мы с Вами свяжемся!
            </p>
            <p class="fail success">Если вы ошиблись при заполнени формы, то, пожалуйста, <a href="javascript: history.back(-1);">заполните заявку еще раз</a></p>

			
        </div>
 </body>
</html>