//2

<?php

$name = 'Apple';
$score = 32.246;

// $info = "[$name][$score]";
// echo $info . PHP_EOL;

// $info = sprintf("[%15s][%10.2f]", $name, $score);
// echo $info . PHP_EOL;

// $info = sprintf("[%-15s][%010.2f]", $name, $score);
// echo $info . PHP_EOL;

printf("[%-15s][%010.2f]" . PHP_EOL, $name, $score);

//3
<?php

$input = ' dot_taguchi  ';
$input = trim($input);

echo strlen($input) . PHP_EOL;
echo strpos($input, '_') . PHP_EOL;

$input = str_replace('_', '-', $input);
echo $input . PHP_EOL;

//4
<?php

$input = ' dot_taguchi  ';
$input = trim($input);

echo strlen($input) . PHP_EOL;
echo strpos($input, '_') . PHP_EOL;

$input = str_replace('_', '-', $input);
echo $input . PHP_EOL;

//6
<?php

$input = '20200320Item-A  1200';
$input = substr_replace($input, 'Item-B  ', 8, 8);

$date = substr($input, 0, 8);
$product = substr($input, 8, 8);
// $amount = substr($input, 16, 4);
$amount = substr($input, 16);

echo $date . PHP_EOL;
echo $product . PHP_EOL;
// echo $amount . PHP_EOL;
echo number_format($amount) . PHP_EOL;

//7
<?php

$input = 'Call us at 03-3001-1256 or 03-3015-3222';
$pattern = '/\d{2}-\d{4}-\d{4}/';

// preg_match($pattern, $input, $matches);
// preg_match_all($pattern, $input, $matches);
// print_r($matches);

$input = preg_replace($pattern, '**-****-****', $input);
echo $input . PHP_EOL;

//8
<?php

$d = [2020, 11, 15];
echo "$d[0]-$d[1]-$d[2]" . PHP_EOL;
echo implode('-', $d) . PHP_EOL;

$t = '17:32:45';
print_r(explode(':', $t));

//9
<?php

$n = 5.6283;

echo ceil($n) . PHP_EOL; // 6
echo floor($n) . PHP_EOL; // 5
echo round($n) . PHP_EOL; // 6
echo round($n, 2) . PHP_EOL; // 5.63

echo mt_rand(1, 6) . PHP_EOL;

echo max(3, 9, 4) .PHP_EOL;
echo min(3, 9, 4) .PHP_EOL;

echo M_PI . PHP_EOL;
echo M_SQRT2 . PHP_EOL;

//10
<?php

$scores = [30, 40, 50];

// array_unshift($scores, 10, 20);
// array_push($scores, 60, 70);
// $scores[] = 80;
// array_shift($scores);
array_pop($scores);

print_r($scores);

//11
<?php

$scores = [30, 40, 50, 60, 70];
$partial = array_slice($scores, 2, 3);
$partial = array_slice($scores, 2);
$partial = array_slice($scores, -2);

print_r($scores);
print_r($partial);

//12
<?php

$scores = [30, 40, 50, 60, 70, 80];

// array_splice($scores, 2, 3);
// array_splice($scores, 2, 3, 100);
array_splice($scores, 2, 0, [100, 101]);

print_r($scores);

//13
<?php

$scores = [40, 50, 20, 30];

sort($scores);
print_r($scores);

shuffle($scores);
print_r($scores);

$picked = array_rand($scores, 2);
echo $scores[$picked[0]] . PHP_EOL;
echo $scores[$picked[1]] . PHP_EOL;

//14
<?php

// $scores = array_fill(0, 5, 10);
// $scores = range(1, 10);
$scores = range(1, 10, 2);

print_r($scores);

echo array_sum($scores) . PHP_EOL;
echo max($scores) . PHP_EOL;
echo min($scores) . PHP_EOL;
echo array_sum($scores) / count($scores) . PHP_EOL;

//16
<?php

$a = [3, 4, 8];
$b = [4, 8, 12];

// $merged = array_merge($a, $b);
// $merged = [...$a, ...$b];
// print_r($merged);

// $uniques = array_unique($merged);
// print_r($uniques);

$diff1 = array_diff($a, $b);
print_r($diff1); // [3]

$diff2 = array_diff($b, $a);
print_r($diff2); // [12]

$common = array_intersect($a, $b);
print_r($common); // [4, 8]

//17
<?php

$prices = [100, 200, 300];

$newPrices = array_map(
  // function ($n) { return $n * 1.1; },
  fn($n) => $n * 1.1,
  $prices
);

print_r($newPrices);

//18
<?php

$numbers = range(1, 10);

$evenNumbers = array_filter(
  $numbers,
//  function ($n) {
//    if ($n % 2 === 0) {
//      return true;
//    } else {
//      return false;
//    }
//    return $n % 2 === 0;
//  }
  fn($n) => $n % 2 === 0
);

print_r($evenNumbers);

//19
<?php

$scores = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

// $keys = array_keys($scores);
// print_r($keys);
// $values = array_values(($scores));
// print_r($values);

// if (array_key_exists('taguchi', $scores) === true) {
//   echo 'taguchi is here!' . PHP_EOL;
// }
// if (in_array(80, $scores) === true) {
//   echo '80 is here!' . PHP_EOL;
// }

echo array_search(70, $scores) . PHP_EOL;

//20
<?php

$scores = [
  'taguchi' => 80,
  'hayashi' => 70,
  'kikuchi' => 60,
];

// sort($scores);
// print_r($scores);
// rsort($scores);
// print_r($scores);

asort($scores);
print_r($scores);
arsort($scores);
print_r($scores);

ksort($scores);
print_r($scores);
krsort($scores);
print_r($scores);

//21
<?php

// $scores = [
//   'taguchi' => 80,
//   'hayashi' => 70,
//   'kikuchi' => 60,
// ];

$data = [
  ['name' => 'taguchi', 'score' => 80],
  ['name' => 'kikuchi', 'score' => 60],
  ['name' => 'hayashi', 'score' => 70],
  ['name' => 'tamachi', 'score' => 60],
];

usort(
  $data,
  function ($a, $b) {
    if ($a['score'] === $b['score']) {
      return 0;
    }
    return $a['score'] < $b['score'] ? 1 : -1;
  }
);

print_r($data);

//22

//23
<?php

$data = [
  ['name' => 'taguchi', 'score' => 80],
  ['name' => 'kikuchi', 'score' => 60],
  ['name' => 'hayashi', 'score' => 70],
  ['name' => 'tamachi', 'score' => 60],
];

$scores = array_column($data, 'score');
$names = array_column($data, 'name');

// print_r($scores);
// print_r($names);

// array_multisort(
//   $scores,
//   $names,
//   $data
// );

array_multisort(
  $scores, SORT_DESC, SORT_NUMERIC,
  $names, SORT_DESC, SORT_STRING,
  $data
);

print_r($data);

//24
<?php

$fp = fopen('names.txt', 'w');

fwrite($fp, "taro\n");

fclose($fp);

//25
<?php

$fp = fopen('names.txt', 'a');

fwrite($fp, "jiro\n");
fwrite($fp, "saburo\n");

fclose($fp);

//26
<?php

// $fp = fopen('names.txt', 'r');
// $contents = fread($fp, filesize('names.txt'));
// fclose($fp);
// echo $contents;

$fp = fopen('names.txt', 'r');
while (($line = fgets($fp)) !== false) {
  echo $line;
}
fclose($fp);

//27
<?php

// $contents = "taro\njiro\nsaburo\n";
// file_put_contents('names.txt', $contents);

// $contents = file_get_contents('names.txt');
// echo $contents;

// $lines = file('names.txt');
$lines = file('names.txt', FILE_IGNORE_NEW_LINES);
var_dump($lines);

//28
<?php

// file_put_contents('data/taro.txt', "taro\n");
// file_put_contents('data/jiro.txt', "jiro\n");

$dp = opendir('data');
while (($item = readdir($dp)) !== false) {
  // if ($item === '.' || $item === '..') {
    // continue;
  // }
  echo $item . PHP_EOL;
}

//29
<?php

// $dp = opendir('data');
// while (($item = readdir($dp)) !== false) {
//   if ($item === '.' || $item === '..') {
//     continue;
//   }
//   echo $item . PHP_EOL;
// }

foreach (glob('data/*.txt') as $item) {
  echo $item . PHP_EOL;
  echo basename($item) . PHP_EOL;
}

//30
<?php

// if (file_exists('data/saburo.txt') === false) {
if (!file_exists('data/saburo.txt')) {
  echo 'Saburo not here!' . PHP_EOL;
  // exit;
}

if (file_exists('data') === true) {
  echo 'data exists!' . PHP_EOL;
}

if (is_writeable('data/taro.txt') === true) {
  echo 'taro is writable!' . PHP_EOL;
}

if (is_readable('data/taro.txt') === true) {
  echo 'taro is readable!' . PHP_EOL;
}

//32
<?php

// echo time() . PHP_EOL;

// echo date('Y-m-d l', time()) . PHP_EOL;
// echo date('Y-m-d l') . PHP_EOL;

echo date('Y-m-d l', mktime(0, 0, 0, 5, 1, 2020)) . PHP_EOL;

echo date('Y-m-d l', strtotime('2020-05-07')) . PHP_EOL;
echo date('Y-m-d l', strtotime('2020-05-07 +1 day')) . PHP_EOL;

// DateTime
