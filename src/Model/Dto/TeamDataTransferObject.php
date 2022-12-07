<?php

namespace App\Model\Dto;

class TeamDataTransferObject
{
    public function __construct(
		public readonly int $id, 
		public readonly string $name, 
		public readonly string $league, 
		public readonly string $leagueGroup, 
		public readonly int $games, 
		public readonly int $wins, 
		public readonly int $draws, 
		public readonly int $losts, 
		public readonly int $points, 
		public readonly int $goals, 
		public readonly int $goalsAgainst
	)
    {
    }
	
	public function getGoalDiff(): int
	{
		return $this->goals - $this->goalsAgainst;
	}
}