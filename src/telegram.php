<?php

/* https://api.telegram.org/bot800855079:AAE854_OCTCongG1N08vhUMjX6QE25O2RCU/getUpdates,
где, XXXXXXXXXXX - токен бота*/

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$token = "800855079:AAE854_OCTCongG1N08vhUMjX6QE25O2RCU";
$chat_id = "";
$arr = arrey(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>