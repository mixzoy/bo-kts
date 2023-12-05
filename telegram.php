<?php


$name = $_POST['name'];
$phone = $_POST['phone'];
$txt = "";
$token = "";
$chat_id = "";
$arr = array(
  'Имя пользователя: ' => $name,
  'Контакты:' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../index.html');
} else {
  echo "Error";
}

?>

