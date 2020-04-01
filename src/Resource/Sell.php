<?php

namespace Codew47\Wallet\Resource;

use Codew47\Wallet\ActiveRecord\SellActiveRecord;
use Codew47\Wallet\Enum\ResourceType;
use Codew47\Wallet\Value\Money;

class Sell extends Transfer
{
    use SellActiveRecord;

    /** @var Money */
    private $total;

    /** @var Boolean */
    private $instant;

    /**
     * Creates a sell reference.
     *
     * @param string $accountId The account id
     * @param string $sellId    The sell id
     *
     * @return Sell A sell reference
     */
    public static function reference($accountId, $sellId)
    {
        $resourcePath = sprintf('/v2/accounts/%s/sells/%s', $accountId, $sellId);

        return new static($resourcePath);
    }

    public function __construct($resourcePath = null)
    {
        parent::__construct(ResourceType::SELL, $resourcePath);
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal(Money $total)
    {
        $this->total = $total;
    }

    public function isInstant()
    {
        return $this->instant;
    }
}
