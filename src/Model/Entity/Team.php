<?php

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table]
class Team
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    public $id;

    #[ORM\Column(type: 'string')]
    public $name;

    #[ORM\Column(type: 'string')]
    public $league;

    #[ORM\Column(type: 'string')]
    public $leagueGroup;

    #[ORM\Column(type: 'integer')]
    public $games;

    #[ORM\Column(type: 'integer')]
    public $wins;

    #[ORM\Column(type: 'integer')]
    public $draws;

    #[ORM\Column(type: 'integer')]
    public $losts;

    #[ORM\Column(type: 'integer')]
    public $points;

    #[ORM\Column(type: 'integer')]
    public $goals;

    #[ORM\Column(type: 'integer', name: 'goals_against')]
    public $goalsAgainst;
}