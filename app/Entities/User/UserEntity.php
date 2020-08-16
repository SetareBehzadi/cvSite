<?php


namespace App\Entities\User;


interface UserEntity
{
    public function getName():string;
    public function getEmail():string;
    public function getGateways();
}