<?php

/*
 * This file is part of the "sort-library" package.
 * (c) Khonko Alex <alkhonko@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dozer111\array_sorter\sortElements;

interface SortInterface
{
    public function sortAsc(array $inputArray): array;
    public function sortDesc(array $inputArray): array;
}
