<?php

namespace Codew47\Wallet\Resource;

use Codew47\Wallet\Enum\ResourceType;

class LitecoinNetwork extends Resource
{
    public function __construct()
    {
        parent::__construct(ResourceType::LITECOIN_NETWORK);
    }
}
