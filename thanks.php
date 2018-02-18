<?php require_once 'layouts/header.php'; ?>

<?php //print_r($_POST['order']); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="text-center" style="font-size: 20px; font-weight: 400; margin-top: 20px;">
                <span>Спасибо за заявку! С вами свяжутся в ближайшее время!</span><br>
                <span>Вернуться на <a href="/">Главную.</a></span>
            </div>
        </div>
    </div>
</div>

<?php 

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to = 'domosed365365@gmail.com, 89251439299@mail.ru';
$subject = "Заявка с сайта myokoshko.ru";


    $message = '<html><head><title></title></head><body>
                        <b>Заявка с сайта myokoshko.ru</b><br><br>' .
                        '<b>Имя:</b> ' . $_POST['person-name'] . '<br><br>' .
                        '<b>Телефон:</b> ' . $_POST['person-phone'] . '<br><br>' .
                        $_POST['order'] . '<br>' . '</body></html>';    

    mail($to, $subject, $message, $headers);
    exit();


?>




