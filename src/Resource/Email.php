<?php

namespace Codew47\Wallet\Resource;

use Codew47\Wallet\Enum\ResourceType;

class Email extends Resource
{
    private $email;

    public function __construct($email)
    {
        parent::__construct(ResourceType::EMAIL);

        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
