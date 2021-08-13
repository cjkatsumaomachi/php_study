//'#18forを使ったループ処理をしよう'

<?php

for ($i = 1; $i <= 5; $i++) {
  // echo 'Hello' . PHP_EOL;
  echo "$i - Hello" . PHP_EOL;
}
?>
//'#19whileを使ったループ処理をしよう'

<?php

// $hp = 100;
$hp = -50;

// while ($hp > 0) {
//   echo "Your HP: $hp" . PHP_EOL;
//   $hp -= 15;
// }

do {
  echo "Your HP: $hp" . PHP_EOL;
  $hp -= 15;
} while ($hp > 0);

//'#20 continue､breakを使ってみよう'

<?php

for ($i = 1; $i <= 10; $i++) {
  // if ($i === 4) {
  // if ($i % 3 === 0) {
  //   continue;
  // }
  if ($i === 4) {
    break;
  }
  echo $i . PHP_EOL;
}

//'#21 関数で処理をまとめてみよう'

<?php

function showAd() 
{
  echo '----------' . PHP_EOL;
  echo '--- Ad ---' . PHP_EOL;
  echo '----------' . PHP_EOL;
}

showAd();
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd();
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd();

//'#22 引数を使ってみよう'
<?php

function showAd($message = 'Ad')  // 仮引数
{
  echo '----------' . PHP_EOL;
  echo '--- ' . $message . ' ---' . PHP_EOL;
  echo '----------' . PHP_EOL;
}

showAd('Header Ad'); // 実引数
echo 'Tom is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
// showAd('Ad');
showAd();
echo 'Steve is great!' . PHP_EOL;
echo 'Bob is great!' . PHP_EOL;
showAd('Footer Ad');

//'#23 returnで値を返してみよう'

<?php

function sum($a, $b, $c)
{
  // echo $a + $b + $c . PHP_EOL;
  return $a + $b + $c;
  echo 'Here' . PHP_EOL;
}

// sum(100, 200, 300); // 600
// sum(300, 400, 500); // 1200

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL; // 1800

//'#24 変数のスコープを理解しよう'
<?php

$rate = 1.1; // グローバルスコープ

function sum($a, $b, $c)
{
  // global $rate;
  $rate = 1.08; // ローカルスコープ
  return ($a + $b + $c) * $rate;
}

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL; // 1944

// '#25 無名関数を作ってみよう'
<?php

// function sum($a, $b, $c)
// {
//   return $a + $b + $c;
// }

$sum = function ($a, $b, $c) { // 無名関数
  return $a + $b + $c;
};

echo $sum(100, 300, 500) . PHP_EOL;

// '#26 条件演算子を使ってみよう'
<?php

function sum($a, $b, $c) 
{
  $total = $a + $b + $c;
  
  // if ($total < 0) {
  //   return 0;
  // } else {
  //   return $total;
  // }
  return $total < 0 ? 0 : $total;
}

echo sum(100, 300, 500) . PHP_EOL; // 900
echo sum(-1000, 300, 500) . PHP_EOL; // 0

