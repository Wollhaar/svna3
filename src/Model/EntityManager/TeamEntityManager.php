<?php declare(strict_types=1);

namespace App\Model\EntityManager;

use App\Model\Dto\TeamDataTransferObject;
use App\Model\Entity\Team;
use Doctrine\ORM\EntityManager;

class TeamEntityManager
{
    public function __construct(
		private EntityManager $entityManager
	)
    {
    }

	public function updateStats(TeamDataTransferObject $teamDTO): void
	{
		$team = $this->entityManager->find(Team::class, $teamDTO->id);
		
		$team->games = $teamDTO->games;
		$team->wins = $teamDTO->wins;
		$team->draws = $teamDTO->draws;
		$team->losts = $teamDTO->losts;
		$team->points = $teamDTO->points;
		$team->goals = $teamDTO->goals;
		$team->goalsAgainst = $teamDTO->goalsAgainst;
		
		$this->entityManager->flush();
	}
}