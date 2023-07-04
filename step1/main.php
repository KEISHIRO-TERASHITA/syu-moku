<?php

// 入力
if(count($argv) > 1) 
{
  $input = $argv[1];
  // 2文字以上の入力を除外
  if (mb_strlen($input) > 1) {
    echo ("1文字で入力してください。" . "\n");
    return;
  }
}
else 
{
  echo ("アルファベットを一文字入力してください" . "\n");
  $input = fgets(STDIN);
  // 2文字以上の入力を除外
  if (mb_strlen($input) > 2) {
    echo ("1文字で入力してください。" . "\n");
    return;
  }
}


// 出力
$start = ord($input);
if ($start >= ord("a") && $start <= ord("z")) 
{
  for ($i = $start; $i <= ord("z"); $i++) {
    echo (chr($i));
  }
} 
elseif ($start >= ord("A") && $start <= ord("Z")) 
{
  for ($i = $start; $i <= ord("Z"); $i++) {
    echo (chr($i));
  }
} 
else 
{
  echo ("入力が不適切です。");
}
