<?php

namespace App\Model\Dto;

class PlayerDataTransferObject
{
    public function __construct(
        public readonly int $id,
        public readonly string $firstname,
        public readonly string $lastname,
        public readonly string $position,
        public readonly int $number,
    )
    {
    }

    public function getFullName(): string
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}