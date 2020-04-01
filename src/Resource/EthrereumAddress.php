<?php

namespace Blockchain\Wallet\Resource;
use Blockchain\Wallet\Enum\ResourceType;

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