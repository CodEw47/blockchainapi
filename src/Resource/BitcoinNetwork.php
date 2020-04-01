<?php

namespace Blockchain\Wallet\Resource;

use Blockchain\Wallet\Enum\ResourceType;

class BitcoinNetwork extends Resource
{
    public function __construct()
    {
        parent::__construct(ResourceType::BITCOIN_NETWORK);
    }
}
