<?php

// 入力
if(count($argv) > 1) 
{
  $input = $argv[1];
}
else 
{
  echo ("数字を入力してください。" . "\n");
  $input = fgets(STDIN);
}

$num = intval($input);



// if ( $num  % 15 === 0) {
//   echo("FizzBuzz");
//   return;
// } 
// elseif ( $num % 5 === 0) {
//   echo("Buzz");
//   return;
// }
// elseif ( $num % 3 === 0 ) {
//   echo("Fizz");
//   return;
// }
// else {
//   echo ($num);
//   return;
// }

$message = "";

if ( $num % 3 === 0) {
  $message = $message . "Fizz";
}
if ( $num % 5 === 0) {
  $message = $message . "Buzz";
}

if ( $message ) {
  echo ($message);
  return;
}
else {
  echo ($num);
  return;
}

