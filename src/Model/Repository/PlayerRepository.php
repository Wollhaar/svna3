<?php declare(strict_types=1);

namespace App\Model\Repository;

use App\Model\Dto\PlayerDataTransferObject;
use App\Model\Entity\Player;
use App\Model\Mapper\PlayersMapper;
use Doctrine\ORM\EntityManager;

class PlayerRepository
{
    public function __construct(private EntityManager $entityManager, private PlayersMapper $playersMapper)
    {}

    public function getAll(): array
    {
        $players = $this->entityManager->getRepository(Player::class)
            ->findBy([
                'active' => true
            ]);

        foreach ($players as $key => $player) {
            $players[$key] = $this->playersMapper->mapEntityToDto($player);
        }

        return $players;
    }

    public function getPlayer(int $id): PlayerDataTransferObject|null
    {
        $player = $this->entityManager->find(Player::class, $id);

        if (is_object($player)) {
            return $this->playersMapper->mapEntityToDto($player);
        }
    }
}