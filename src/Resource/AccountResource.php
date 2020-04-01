<?php

namespace Codew47\Wallet\Resource;

trait AccountResource
{
    public function getAccountId()
    {
        if ($resourcePath = $this->getResourcePath()) {
            $parts = explode('/', $resourcePath);

            return $parts[3];
        }
    }
}
