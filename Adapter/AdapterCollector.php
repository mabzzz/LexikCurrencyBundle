<?php

namespace Lexik\Bundle\CurrencyBundle\Adapter;

use InvalidArgumentException;

/**
 * @author Yoann Aparici <y.aparici@lexik.fr>
 */
final class AdapterCollector
{
    private $elements = [];

    /**
     * Add an adapter
     *
     * @param AbstractCurrencyAdapter $adapter
     */
    public function add(AbstractCurrencyAdapter $adapter)
    {
        $this->elements[$adapter->getIdentifier()] = $adapter;
    }

    /**
     * Get adapter
     *
     * @param mixed $key
     * @return AbstractCurrencyAdapter
     */
    public function get($key)
    {
        if (!isset($this->elements[$key])) {
            throw new InvalidArgumentException('Adapter does not exist');
        }

        return $this->elements[$key];
    }
}
