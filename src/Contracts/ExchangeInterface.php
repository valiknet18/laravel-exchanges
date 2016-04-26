<?php

namespace Valiknet18\LaravelExchanges;

/**
 * Interface ExchangeInterface
 * @package Valiknet18\LaravelExchanges
 */
interface ExchangeInterface
{
    /**
     * @param $from
     * @return mixed
     */
    public function exchange($from);

    /**
     * @param $key
     * @return mixed
     */
    public function hasExchange($key);
}
