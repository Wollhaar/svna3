<?php

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table]
class Player
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    public $id;

    #[ORM\Column(type: 'string')]
    public $firstname;

    #[ORM\Column(type: 'string')]
    public $lastname;

    #[ORM\Column(type: 'string')]
    public $position;

    #[ORM\Column(type: 'integer')]
    public $number;
}