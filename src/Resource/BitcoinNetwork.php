<?php

namespace Codew47\Wallet\Resource;

use Codew47\Wallet\Enum\ResourceType;

class BitcoinNetwork extends Resource
{
    public function __construct()
    {
        parent::__construct(ResourceType::BITCOIN_NETWORK);
    }
}
