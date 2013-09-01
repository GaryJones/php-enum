<?php

/**
 * Unit tests for the class MabeEnum_Enum
 *
 * @link http://github.com/marc-mabe/php-enum for the canonical source repository
 * @copyright Copyright (c) 2012 Marc Bennewitz
 * @license http://github.com/marc-mabe/php-enum/blob/master/LICENSE.txt New BSD License
 */
class MabeEnumTest_TestAsset_EnumWithDefaultValue extends MabeEnum_Enum
{
    const ONE = 1;
    const TWO = 2;

    public function __construct($value = self::ONE)
    {
        parent::__construct($value);
    }
}
