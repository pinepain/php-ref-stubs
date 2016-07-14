<?php

/*
 * This file is part of the pinepain/php-weak PHP extension.
 *
 * Copyright (c) 2016 Bogdan Padalko <zaq178miami@gmail.com>
 *
 * Licensed under the MIT license: http://opensource.org/licenses/MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code or visit http://opensource.org/licenses/MIT
 */


namespace Weak;


use Exception;


class NotifierException extends Exception
{
    private $exceptions = [];

    /**
     * Get exceptions thrown from notifiers
     *
     * @return array
     */
    public function getExceptions() : array
    {
        return $this->exceptions;
    }
}
