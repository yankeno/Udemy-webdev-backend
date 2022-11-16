<?php

/**
 * 税込金額を返す関数
 *
 * @param int   $base_price 金額
 * @param float $tax_rate   税率
 * @return int  $sum_price  税込金額
 */
function with_tax($base_price, $tax_rate = 0.1)
{
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}
