<?php

namespace Blockchain\Wallet\ActiveRecord;

trait BaseActiveRecord
{
    private function getClient()
    {
        return ActiveRecordContext::getClient();
    }
}
