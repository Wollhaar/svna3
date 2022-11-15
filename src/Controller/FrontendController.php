<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontendController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {
        return $this->render('frontend/home.html.twig');
    }

    #[Route('/kader')]
    public function kader(): Response
    {
//        $playMa = new PlayerManager();
//        $players = $playMa->getPlayers();
        $players = [
            ['lastname' => 'Goraj', 'firstname' => 'David', 'position' => 'Allrounder'],
            ['lastname' => 'Schweißfurt', 'firstname' => 'Chris', 'position' => 'Keeper'],
            ['lastname' => 'Stark', 'firstname' => 'Christopher', 'position' => 'Defender'],
        ];

        return $this->render('frontend/kader.html.twig', [
            'players' => $players
        ]);
    }

    public function tabelle(): Response
    {
        $page = 'tabelle';
        $team = new TeamManager();
        $allTeams = $team->getTeams();
    }

    public function spieltag(): Response
    {
        $helper = new Helper();
        if ($helper->allow()) {
            $page = 'spieltag';
            $matches = new Matches();
            $matchday = $matches->matchday($_GET['md'], empty($_GET['md']));
        }
    }

    public function save(): Response
    {
        $matches = new Matches();
        $matches->saveResults($_POST);
        //header('location: ?a=tabelle');
    }

     public function spielplan(): Response
     {
         $page = 'spielplan';
         $matches = new Matches();
         $matchlist = $matches->getOwnMatches();
     }

    public function training(): Response
    {
        $page = 'training';
    }

    public function kontakt(): Response
    {
        $page = 'kontakt';
    }

    public function test(): Response
    {
        $page = 'tabelle';
        $teamManager = new Matches();
        var_dump("qwertzu");
        echo $teamManager->matchCalculator();
    }
}