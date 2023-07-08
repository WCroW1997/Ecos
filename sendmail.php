<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ua', 'PHPMailer/language/phpmailer.lang-uk.php');
    $mail->IsHTML(true);

    $mail->setFrom('ekoscomu@ekos.com.ua', 'Екос - сайт');
    $mail->addAddress('wcrow1997@gmail.com');
    $mail->Subject = 'Запис з сайту';

    $body.= '<h1>Перевірка листа</h1>';
    $body.= "<p>Ім'я: ".$_POST['name'].'</p>';
    $body.= "<p>Номер телефону: ".$_POST['phone'].'</p>';

    $mail->Body = $body; 

    if (!$mail->send()){
    $message = 'Error 2';
    }else{
        $message = 'Дані відправлено!';
    }

    $response = ['message' = > $message];
    header('Content-type: application/json');
    echo json_encode($response);
?>