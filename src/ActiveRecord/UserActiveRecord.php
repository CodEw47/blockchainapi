<?php

namespace Codew47\Wallet\ActiveRecord;

trait UserActiveRecord
{
    use BaseActiveRecord;

    /**
     * Issues a refresh request to the API.
     */
    public function refresh(array $params = [])
    {
        $this->getClient()->refreshUser($this, $params);
    }
}
