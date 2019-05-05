<?php

/*
 * This file is part of the "sort-library" package.
 * (c) Khonko Alex <alkhonko@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace dozer111\array_sorter\exceptions;

class InvalidSortType extends \InvalidArgumentException
{
    public $message = 'Sort type must be SORT_ASC or SORT_DESC';
}
