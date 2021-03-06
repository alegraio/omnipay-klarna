<?php

namespace Omnipay\Klarna;

interface RequestInterface
{
    /**
     * @return array
     */
    public function getSensitiveData(): array;

    /**
     * @return string
     */
    public function getProcessName(): string;

    /**
     * @return string
     */
    public function getProcessType(): string;
}
