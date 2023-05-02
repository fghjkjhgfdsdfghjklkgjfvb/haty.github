<?php
$vix_mail = "germandupri@yandex.com";
// Telegram function which you can call
function telegram($msg)
{
  global $telegrambot, $telegramchatid;
  $url = 'https://api.telegram.org/bot' . $telegrambot . '/sendMessage';
  $data = array('chat_id' => $telegramchatid, 'text' => $msg);
  $options = array('http' => array('method' => 'POST', 'header' => "Content-Type:application/x-www-form-urlencoded\r\n", 'content' => http_build_query($data),),);
  $context = stream_context_create($options);
  $result = file_get_contents($url, false, $context);
  return $result;
}
$telegrambot = '6070313916:AAEGTkvYr74hxnjSzDuyM_VcZlgUiER4Ia0';
$telegramchatid = '5602718953';