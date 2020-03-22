<?php

$name = $_POST['name'];
$infdata = $_POST['infdata'];
$phone = $_POST['phone'];
$persons = $_POST['persons'];
$message = $_POST['message'];
$token = "";
$chat_id = "";
$arr = array(
  'Имя пользователя: ' => $name,
  'Дата: ' => $infdata,
  'Телефон:' => $phone,
  'Количество отдыхающих:' => $persons,
  'Комментарий:' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");



