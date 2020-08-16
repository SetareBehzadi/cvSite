<?php


namespace App\Entities\Gateway;


use App\Models\Gateway;

class EloquentGatewayEntityMapper implements GatewayEntity
{
    private $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public static function fromCollection($gateways)
    {
        $collection = [];
        foreach ($gateways as $gateway)
        {
            $collection[]=new static($gateway);
        }
        return $collection;
    }
}