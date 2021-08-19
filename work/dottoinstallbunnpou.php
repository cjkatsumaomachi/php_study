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


// '#27  nullも渡せるようにしよう'

<?php

declare(strict_types=1);

function getAward(int $score): ?string
{
  return $score >= 100 ? 'Gold Medal' : 'まいこちゃん';
}

echo getAward(150) . PHP_EOL;
echo getAward(29) . PHP_EOL;



// '#28 条件演算子を使ってみよう'
<?php

// $score1 = 90;
// $score2 = 40;
// $score3 = 100;

$scores = [
  90,
  40,
  100,
];


echo $scores[1] . PHP_EOL;
$scores[1] = 60;
echo $scores[1] . PHP_EOL;



// '#30 条件演算子を使ってみよう'
<?php

$scores = [
  'first'  => 90, 
  'second' => 40, 
  'third'  => 100,
];

// var_dump($scores);
// print_r($scores);

echo $scores['third'] . PHP_EOL;

//#31 foreachで配列を操作しよう

<?php

$scores = [
  'first'  => 90, 
  'second' => 40, 
  'third'  => 100,
];

// foreach ($scores as $value) {
// foreach ($scores as $score) {
//   echo $score . PHP_EOL;
// }

foreach ($scores as $key => $score) {
  echo $key . ' - ' . $score . PHP_EOL;
}

//#32 配列の要素を展開しよう

<?php

$moreScores = [
  55,
  72,
  'perfect',
  [90, 42, 88],
];

$scores = [
  90,
  40,
  ...$moreScores,
  100,
];

// print_r($scores);    

echo $scores[5][2] . PHP_EOL;


//#33 可変長引数を表現しよう


<?php

// function sum($a, $b, $c)

function sum(...$numbers)
{
  // return $a + $b + $c;
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return $total;
}

echo sum(1, 3, 5) . PHP_EOL;
echo sum(4, 2, 5, 1) . PHP_EOL;

//#34 複数の返り値を受け取ってみよう

<?php

function getStats(...$numbers)
{
  $total = 0;
  foreach ($numbers as $number) {
    $total += $number;
  }
  return [$total, $total / count($numbers)];
}

// print_r(getStats(1, 3, 5));

// list($sum, $average) = getStats(1, 3, 5);
[$sum, $average] = getStats(1, 3, 5);

echo $sum . PHP_EOL;
echo $average . PHP_EOL;