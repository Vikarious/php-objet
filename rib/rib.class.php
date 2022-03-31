<?php

class RIBValidator
{
    private $bankCode;
    private $agencyCode;
    private $accountNumber;
    private $ribKey;

    public function __construct($bankCode, $agencyCode, $accountNumber, $ribKey)
    {
        $this->bankCode = (int)$bankCode;
        $this->agencyCode = (int)$agencyCode;
        $this->accountNumber = (int)$accountNumber;
        $this->ribKey = (int)$ribKey;
    }
}
