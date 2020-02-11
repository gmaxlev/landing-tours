<?php

    /* 
        Список адресов
    */
    $recipients = array(
        "gmaxlev@gmail.com",
    );


    if (!isset($_POST['form'])) exit;

    $text_message ='';

    
    if ($_POST['form']=='simple'
        && isset($_POST['name'])
        && isset($_POST['phone'])
    ) {
        
  
        $form_name = htmlspecialchars(trim($_POST['name']));
        $form_phone = htmlspecialchars(trim($_POST['phone']));

        $text_message = "

            Имя: ".$form_name ." <br>
            Номер телефона: ".$form_phone." <br>
        ";
    }

    if ($_POST['form']=='help'
        && isset($_POST['name'])
        && isset($_POST['phone'])
        && isset($_POST['message'])
    ) {
        
  
        $form_name = htmlspecialchars(trim($_POST['name']));
        $form_phone = htmlspecialchars(trim($_POST['phone']));
        $form_message = htmlspecialchars(trim($_POST['message']));

        $text_message = "

            Имя: ".$form_name ." <br>
            Номер телефона: ".$form_phone." <br>
            Комментарий: ".$form_message." <br>
        ";
    }

    if ($_POST['form']=='landing'
        && isset($_POST['name'])
        && isset($_POST['phone'])
        && isset($_POST['orient'])
        && isset($_POST['price'])
    ) {
        
  
        $form_name = htmlspecialchars(trim($_POST['name']));
        $form_phone = htmlspecialchars(trim($_POST['phone']));
        $form_prient = htmlspecialchars(trim($_POST['orient']));
        $form_price = htmlspecialchars(trim($_POST['price']));

        $text_message = "

            Имя: ".$form_name ." <br>
            Номер телефона: ".$form_phone." <br>
            Направление: ".$form_prient." <br>
            Бюджет: ".$form_price." <br>
        ";
    }

    

    $subject = "Новая заявка по залогу!";
    $header = "Content-type: text/html\r\n";

    $email_to = implode(',', $recipients);

    $retval = mail ($email_to,$subject,$text_message,$header); 

?>