<?php
class udip
{
 public function getRandomStr($n)
 {
  $keyLength = $n;
  $strLow = "abcdefghijklmnopqrstuvwxyz";
  $strUpp = strtoupper($strLow);
  $newStr = $strLow . $strUpp . "1234567890()$";
  $randStr = substr(str_shuffle($newStr), 0, $keyLength);
  return $randStr;
 }
}

$custom = new udip();