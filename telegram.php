<?php

/* https://api.telegram.org/bot6357406704:AAG5oiD46fa-SBBABBZ9npXOqQaLuTTab_8/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$type = $_POST['type'];
$meters = $_POST['meters'];
$quantity = $_POST['quantity'];
$design = $_POST['design'];
$speed = $_POST['speed'];
$token = "6357406704:AAG5oiD46fa-SBBABBZ9npXOqQaLuTTab_8";
$chat_id = "-995065901";
$arr = array(
  'Тип: ' => $type,
  'Метрів: ' => $meters,
  'Кімнат: ' => $quantity,
  'Дизайн: ' => $design,
  'Терміни: ' => $speed
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>