<?php

namespace Codew47\Wallet\Resource;
use Codew47\Wallet\Enum\ResourceType;

class EthrereumAddress extends Resource
{
    private $address;

    public function __construct($address)
    {
        parent::__construct(ResourceType::ETHEREUM_ADDRESS);

        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }
}
