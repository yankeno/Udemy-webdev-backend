<?php
var_dump($_POST);

$num = $_POST['num'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$sum = ($num * $price) * (100 - $discount) / 100;

echo '合計：' . $sum;
