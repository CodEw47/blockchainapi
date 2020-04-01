<?php

namespace Codew47\Wallet\Resource;

use Codew47\Wallet\Enum\ResourceType;

class EthereumNetwork extends Resource
{
    public function __construct()
    {
        parent::__construct(ResourceType::ETHEREUM_NETWORK);
    }
}
