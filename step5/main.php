<?php

// 入力
echo ("データ数とデータ群を入力してください" . "\n");
$rows = fgets(STDIN);
$data = fgets(STDIN);

$arr = explode(" ", $data);

// ノーヒントだとfor文の回し方混乱するな...

