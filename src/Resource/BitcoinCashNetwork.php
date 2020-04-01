<?php
/**
 * @author Floran Pagliai
 * Date: 20/12/2017
 * Time: 11:30
 */

namespace Codew47\Wallet\Resource;

use Codew47\Wallet\Enum\ResourceType;
use Codew47\Wallet\Resource\Resource;

class BitcoinCashNetwork extends Resource
{
    public function __construct()
    {
        parent::__construct(ResourceType::BITCOIN_CASH_NETWORK);
    }
}
