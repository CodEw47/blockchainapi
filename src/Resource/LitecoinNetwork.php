<?php

namespace Blockchain\Wallet\Resource;

use Blockchain\Wallet\Enum\ResourceType;

class LitecoinNetwork extends Resource
{
    public function __construct()
    {
        parent::__construct(ResourceType::LITECOIN_NETWORK);
    }
}