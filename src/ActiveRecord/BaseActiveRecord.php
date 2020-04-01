<?php

namespace Codew47\Wallet\ActiveRecord;

trait BaseActiveRecord
{
    private function getClient()
    {
        return ActiveRecordContext::getClient();
    }
}
