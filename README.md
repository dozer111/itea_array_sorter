# dozer111\array_sorter

Library for 
1. sort number/string arrays in ASC/DESC
2. sort to ASC/DESC by custom sorter
---
With possibilities to change **on air**
1. sort logic (num/string/custom) `Sorter::setSort(SortInterface $newObj)`
2. sort type (ASC/DESC)     `Sorter::setSortType(int $sortType)`
## Installation

`composer require dozer111\array_sorter` 

## Usage examples
#### Simple default sort numeric array

```php
use dozer111\array_sorter\Sorter;
use dozer111\array_sorter\sortElements\NumberSort;
# .............

$array = [1,2,4,21,3,7,5,6,7];

$sortner = new Sorter(new NumberSort(),SORT_DESC);
$res = $sortner->sort($array);

```



