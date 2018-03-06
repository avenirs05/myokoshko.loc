<?php include ROOT . '/views/layouts/header.php'; ?>

<?php //print_r($_POST); ?>

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

<?php include ROOT . '/views/layouts/footer.php'; ?>

<?php 


$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$to = 'domosed365365@gmail.com, 89251439299@mail.ru';
$subject = "Заявка с сайта myokoshko.ru";


    $message = '<html><head><title></title></head><body>
                        <b>Заявка с сайта myokoshko.ru</b><br><br>' .
                        '<b>Имя:</b> ' . $_POST['person-name'] . '<br><br>' .
                        '<b>Телефон:</b> ' . $_POST['person-phone'] . '<br><br>' .
                        '<b>Согласие на обработку данных:</b> ' . 'согласен' .
                        $_POST['order'] . '<br>' . '</body></html>';    

    mail($to, $subject, $message, $headers);
    exit();


?>






