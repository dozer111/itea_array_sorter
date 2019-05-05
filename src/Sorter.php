<?php

/*
 * This file is part of the "sort-library" package.
 * (c) Khonko Alex <alkhonko@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dozer111\array_sorter;

use dozer111\array_sorter\exceptions\InvalidSortType;
use dozer111\array_sorter\sortElements\SortInterface;

final class Sorter
{
    private $sortObject;
    private $sortType;



    public function __construct(SortInterface $sortTypeObject, int $sortType = \SORT_ASC)
    {
        $this->sortObject = $sortTypeObject;
        $this->sortType = $sortType;
    }



    public function setSort(SortInterface $sortTypeObject): void
    {
        $this->sortObject = $sortTypeObject;
    }

    public function setSortType(int $sortType): void
    {
        $this->sortType = $sortType;
    }

    public function sort(array $inputArray): array
    {
        $this->validateSortType();

        $result = (\SORT_ASC==$this->sortType)
            ? $this->sortObject->sortAsc($inputArray)
            : $this->sortObject->sortDesc($inputArray);

        return $result;
    }

    protected function validateSortType(): void
    {
        if (\SORT_ASC!=$this->sortType && \SORT_DESC!=$this->sortType) {
            throw new InvalidSortType();
        }
    }
}
