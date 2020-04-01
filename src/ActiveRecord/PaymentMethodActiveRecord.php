<?php

namespace Codew47\Wallet\ActiveRecord;

trait PaymentMethodActiveRecord
{
    use BaseActiveRecord;

    /**
     * Issues a refresh request to the API.
     */
    public function refresh(array $params = [])
    {
        $this->getClient()->refreshPaymentMethod($this, $params);
    }
}
