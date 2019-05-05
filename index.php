<?php

/*
 * This file is part of the "sort-library" package.
 * (c) Khonko Alex <alkhonko@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once 'vendor/autoload.php';

use dozer111\array_sorter\Sorter;

\error_reporting(\E_ALL);
\ini_set('display_errors', 1);


$array = [1,2,4,21,3,7,5,6,7];

$sortner = new Sorter(new \dozer111\array_sorter\sortElements\NumberSort(), \SORT_DESC);
$res = $sortner->sort($array);




$sortner->setSort(new \dozer111\array_sorter\sortElements\StringSort());
$res = $sortner->sort($array2);



$array2 = ['test1','asdasd','jack','zzill','tyop','lol'];
echo '<pre>';
\var_dump($res);
echo '</pre>';
echo'<hr>';
die;
