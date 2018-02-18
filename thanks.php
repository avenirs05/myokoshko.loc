<?php require_once 'layouts/header.php'; ?>

<?php //print_r($_POST['order']); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <span>Спасибо за обращение! С вами свяжутся в ближайшее время!</span><br>
                <span>Вернуться на <a href="/">Главную.</a></span>
            </div>
        </div>
    </div>
</div>

<?php 

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to = 'domosed365365@gmail.com';
$subject = "Заявка с сайта myokoshko.ru";


    $message = '<html><head><title></title></head><body>
                        <strong>Тема: заявка с сайта myokoshko.ru</strong><br>' .
                        $_POST['order'] . '<br>' . '</body></html>';    

    mail($to, $subject, $message, $headers);
    exit();


?>




