<?php declare(strict_types=1);

namespace App\Model\Repository;

use App\Model\Dto\TeamDataTransferObject;
use App\Model\Entity\Team;
use App\Model\Mapper\TeamsMapper;
use Doctrine\ORM\EntityManager;

class TeamRepository
{
	public function __construct(
		private EntityManager $entityManager,
		private TeamsMapper $teamsMapper
	)
	{
	}
	
	public function getTeams(): array
    {
		$allTeams = $this->entityManager->getRepository(Team::class)
			->findBy(['active' => true]);
			
		foreach ($allTeams as $key => $team) {
			$allTeams[$key] = $this->teamsMapper->mapEntityToDto($team);
		}
        return $allTeams;
    }
	
    public function getTeam($id): TeamDataTransferObject|null
    {
        $team = $this->entityManager->find(Team::class, $id);
		
		if (is_object($team)) {
			return $this->teamsMapper->mapEntityToDto($team);
		}
    }
}