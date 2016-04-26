<?php

namespace Valiknet18\LaravelExchanges;

abstract class ExchangeClass
{
    /**
     * @param $key
     * @return bool
     */
    public function hasExchange($key)
    {
        return array_key_exists($key, $this->exchanges);
    }

    /**
     * @param $from
     * @return mixed
     */
    public function exchange($from)
    {
        return $this->exchanges[$from];
    }
}
