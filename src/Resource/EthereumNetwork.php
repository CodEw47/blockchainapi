<?php

namespace Blockchain\Wallet\Resource;

use Blockchain\Wallet\Enum\ResourceType;

class EthereumNetwork extends Resource
{
    public function __construct()
    {
        parent::__construct(ResourceType::ETHEREUM_NETWORK);
    }
}