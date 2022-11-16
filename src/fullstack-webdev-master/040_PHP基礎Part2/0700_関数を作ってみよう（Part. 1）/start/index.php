<?php

$numbers = [1, 2, 3, 4, 5];
$numbers2 = [1, 2, 3];

$sum1 = sumNumbers($numbers);
$sum2 = sumNumbers($numbers2);

echo "合計1：{$sum1}";
echo "<br>";
echo "合計2：{$sum2}";

/**
 * 配列内の値の合計を返す関数
 *
 * @param array $numbers
 * @return integer
 */
function sumNumbers(array $numbers): int
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}
