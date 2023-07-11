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

$num = intval($input) - 1;

echo(1/sqrt(5)*((1+sqrt(5))/2)**$num - 1/sqrt(5)*((1-sqrt(5))/2)**$num);
echo("\n");
