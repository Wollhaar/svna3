<?php

namespace App\Model\Mapper;

use App\Model\Dto\PlayerDataTransferObject;

class PlayersMapper
{
    public function mapToDto(array $player): PlayerDataTransferObject
    {
        return new PlayerDataTransferObject(
            $player['id'],
            $player['firstname'],
            $player['lastname'],
            $player['position'],
            $player['number'],
        );
    }

    public function mapEntityToDto(array $player): PlayerDataTransferObject
    {
        return new PlayerDataTransferObject(
            $player->id,
            $player->firstname,
            $player->lastname,
            $player->position,
            $player->number,
        );
    }
}