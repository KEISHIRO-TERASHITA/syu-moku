<?php

// 入力
if(count($argv) > 1) 
{
  $input = $argv[1];
}
else 
{
  echo ("整数を入力してください。" . "\n");
  $input = fgets(STDIN);
}

$num = intval($input);

// 処理
for ( $i = 1; $i <= $num; $i++) {
  $sqr = $i ** 2;
  if ($sqr < $num) {
    continue;
  }
  elseif ($sqr === $num) {
    echo($i);
    return;
  } 
  elseif ($sqr > $num) {
    echo (-1);
    return;
  }
}


