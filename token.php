<?php


function generateToken(int $id)
{
  $token = "";
  date_default_timezone_set('UTC');
  $date = date("YmdHms");
  $newKey = "";
  for ($i = 0; $i < 8; $i++) {
    $newKey .= rand(0, 9);
  }
  $token = md5($id . $newKey . $date);
  return $token;
}
