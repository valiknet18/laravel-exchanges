<?php

namespace Valiknet18\LaravelExchanges;

/**
 * Class CbrExchangeService
 * @package App\Services
 */
class CbrExchangeService extends ExchangeClass implements ExchangeInterface
{
    /**
     * @var array
     */
    private $exchanges = [];

    /**
     * CbrExchangeService constructor.
     */
    public function __construct()
    {
        $exchanges = file_get_contents("http://www.cbr.ru/scripts/XML_daily.asp?");
        $exchanges = simplexml_load_string($exchanges);


        foreach ($exchanges as $exchange) {
            $this->exchanges[strtolower($exchange["CharCode"])] = $exchange;
        }
    }
}
