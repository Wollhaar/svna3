<?php
error_reporting(E_ALL);

require_once 'class/Matches.php';
require_once 'class/Helper.php';
require_once 'class/PlayerManager.php';
require_once 'class/TeamManager.php';

switch ($_GET['a']){
    case 'kader':
        $page = 'kader';
        $playMa = new PlayerManager();
        $players = $playMa->getPlayers();
        
        break;
    
    case 'tabelle':
        $page = 'tabelle';
        $team = new TeamManager();
        $allTeams = $team->getTeams();
        break;
    
    case 'spieltag':
        $helper = new Helper();
        if($helper->allow()){
            $page = 'spieltag';
            $matches = new Matches();
            $matchday = $matches->matchday($_GET['md'], empty($_GET['md']));
        }
        break;
        
    case 'save':
        $matches = new Matches();
        $matches->saveResults($_POST);
        //header('location: ?a=tabelle');
        break;
    
    case 'spielplan':
        $page = 'spielplan';
        $matches = new Matches();
        $matchlist = $matches->getOwnMatches();
        break;
    
    case 'training':
        $page = 'training';
        break;
    
    case 'kontakt':
        $page = 'kontakt';
        break;
    
    case 'test':
        $page = 'tabelle';
        $teamManager = new Matches();
        var_dump("qwertzu");
        echo $teamManager->matchCalculator();
        break;
    
    default:
        $page = 'basic';
        
}

include_once 'svna.php';



