<?php

    /* 
        Список адресов
    */
    $recipients = array(
        "19331@z.moituristy.com","tkachuk.olexiy@gmail.com"
    );


    if (!isset($_POST['form'])) exit;

    $text_message ='';

    
    if ($_POST['form']=='simple'
        && isset($_POST['name'])
        && isset($_POST['phone'])
        && isset($_POST['date'])
        && isset($_POST['duration'])
        && isset($_POST['count'])
        && isset($_POST['baby'])
        && isset($_POST['orient'])
        && isset($_POST['price'])
    ) {
        
  
        $form_name = htmlspecialchars(trim($_POST['name']));
        $form_phone = htmlspecialchars(trim($_POST['phone']));
        $form_date = htmlspecialchars(trim($_POST['date']));
        $form_duration = htmlspecialchars(trim($_POST['duration']));
        $form_count = htmlspecialchars(trim($_POST['count']));
        $form_baby = htmlspecialchars(trim($_POST['baby']));
        $form_orient = htmlspecialchars(trim($_POST['orient']));
        $form_price = htmlspecialchars(trim($_POST['price']));

        $text_message = "
            Имя: ".$form_name ." <br>
            Номер телефона: ".$form_phone." <br>
            Желаемые даты вылета: ".$form_date." <br>
            Длительность тура: ".$form_duration." <br>
            Количество человек: ".$form_count." <br>
            Направление: ".$form_orient." <br>
            Бюджет: ".$form_price." <br>
            Возраст ребёнка/детей (если актуально): ".$form_baby." <br>
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
    
    
    $mail['charset'] = "utf-8";
    $mail['to'] = implode(',', $recipients);
    $mail['subject'] = 'Новый клиент для Kultura Tura';
    $mail['massage'] = $text_message;
    
    $mail['header'] = "MIME-Version: 1.0\n"
    ."X-Priority: 3\n"
    ."X-Mailer: Mailer\n"
    ."Content-Transfer-Encoding: 8bit\n"
    ."Content-Type: text/html; charset=" . $mail['charset'] . "\n";
    
    mail ($mail['to'], $mail['subject'], $mail['massage'], $mail['header']);
    

?>