<?php

namespace App\class;
class Team
{
    private $teamID;
    private $games = 1;
    private $win;
    private $draws;
    private $lost;
    private $goals;
    private $goalA;
    private $goalDiff;
    private $points;

    public function __construct($points, $teamID, $goals, $wdl)
    {
        $this->setTeamID($teamID);
        $this->setWin($wdl['win']);
        $this->setDraws($wdl['draws']);
        $this->setLost($wdl['lost']);
        $this->setGoals($goals['goals']);
        $this->setGoalA($goals['goalA']);
        $this->setGoalDiff($goals['goalDiff']);
        $this->setPoints($points);
    }

    public function getTeamID()
    {
        return $this->teamID;
    }

    public function getGames()
    {
        return $this->games;
    }

    public function getWin()
    {
        return $this->win;
    }

    public function getDraws()
    {
        return $this->draws;
    }

    public function getLost()
    {
        return $this->lost;
    }

    public function getGoals()
    {
        return $this->goals;
    }

    public function getGoalA()
    {
        return $this->goalA;
    }

    public function getGoalDiff()
    {
        return $this->goalDiff;
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function setTeamID($teamID)
    {
        $this->team = $teamID;
    }

    function setWin($win)
    {
        $this->win = $win;
    }

    function setDraws($draws)
    {
        $this->draws = $draws;
    }

    function setLost($lost)
    {
        $this->lost = $lost;
    }

    public function setGoals($goals)
    {
        $this->goals = $goals;
    }

    public function setGoalA($goalA)
    {
        $this->goalA = $goalA;
    }

    public function setGoalDiff($goalDiff)
    {
        $this->goalDiff = $goalDiff;
    }

    public function setPoints($points)
    {
        $this->points = $points;
    }


}