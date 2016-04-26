<?php

namespace Valiknet18\LaravelExchanges;

/**
 * Class PrivatExchangeService
 * @package App\Services
 */
class PrivatExchangeService extends ExchangeClass implements ExchangeInterface
{
    /**
     * @var array
     */
    public $exchanges = [];

    /**
     * PrivatExchangeService constructor.
     */
    public function __construct()
    {
        $exchanges = file_get_contents("https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11");
        $exchanges = json_decode($exchanges, 1);

        foreach ($exchanges as $exchange) {
            $this->exchanges[$exchange["ccy"]] = $exchange;
        }
    }
}
