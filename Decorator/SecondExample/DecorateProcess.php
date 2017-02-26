<?php
namespace Decorator\SecondExample;

abstract class DecorateProcess extends ProcessRequest
{
    protected $processRequest;

    public function __construct(ProcessRequest $processRequest)
    {
        $this->processRequest = $processRequest;
    }
}