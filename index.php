<?php
  $url = "www.fortunecookiemessage.com";
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $page = curl_exec($ch);
  curl_close($ch);
  $pattern = '/<a.*class="cookie-link"w*>(.*)<\/a>/';
  preg_match($pattern, $page, $match);
  $result= strip_tags($match[1]);
  echo $result;
?>
