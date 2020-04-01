<?php

namespace Codew47\Wallet\Enum;

/**
 * Supported order statuses.
 */
class OrderStatus
{
    const ACTIVE = 'active';
    const EXPIRED = 'expired';
    const MISPAID = 'mispaid';
    const PAID = 'paid';
    const PENDING = 'pending';

    private function __construct()
    {
    }
}
