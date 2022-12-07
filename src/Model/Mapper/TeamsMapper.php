<?php

namespace App\Model\Mapper;

use App\Model\Dto\TeamDataTransferObject;
use App\Model\Entity\Team;

class TeamsMapper
{
    public function mapToDto(array $team): TeamDataTransferObject
    {
        return new TeamDataTransferObject(
            $team['id'],
            $team['name'],
            $team['league'],
            $team['leagueGroup'],
            $team['games'],
            $team['wins'],
            $team['draws'],
            $team['losts'],
            $team['points'],
            $team['goals'],
            $team['goalsAgainst'],
        );
    }

    public function mapEntityToDto(Team $team): TeamDataTransferObject
    {
        return new TeamDataTransferObject(
            $team->id,
            $team->name,
            $team->league,
            $team->leagueGroup,
            $team->games,
            $team->wins,
            $team->draws,
            $team->losts,
            $team->points,
            $team->goals,
            $team->goalsAgainst,
        );
    }
}