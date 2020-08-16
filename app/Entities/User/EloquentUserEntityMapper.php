<?php


namespace App\Entities\User;


use App\Entities\Gateway\EloquentGatewayEntityMapper;
use App\Models\User;

class EloquentUserEntityMapper implements UserEntity
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {

        $this->user = $user;
    }

    public function getName(): string
    {
        return $this->user->name;
    }

    public function getEmail(): string
    {
       return $this->user->email;
    }

    public function getGateways()
    {
        return EloquentGatewayEntityMapper::fromCollection($this->user->gateways);
    }
}