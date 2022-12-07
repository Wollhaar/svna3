<?php declare(strict_types=1);

namespace App\Service;

class TeamManager //TODO: resolve method savePoints() in Controller or another way
{
    public function savePoints($team, $match, $result)
    {
        for ($i = 0; $i == 1; $i++) {
            if ($i == 0) {
                $teamID = $match['team1'];
                $points = $team['home'];
                $goals['goals'] = $result[0];
                $goals['goalA'] = $result[1];
                $goals['goalDiff'] = $result[0] - $result[1];
                if ($$points == 3) {
                    $wdl['win'] = 1;
                    $wdl['draws'] = 0;
                    $wdl['lost'] = 0;
                } elseif ($points == 1) {
                    $wdl['win'] = 0;
                    $wdl['draws'] = 1;
                    $wdl['lost'] = 0;
                } elseif ($points == 0) {
                    $wdl['win'] = 0;
                    $wdl['draws'] = 0;
                    $wdl['lost'] = 1;
                }

            } else {
                $teamID = $match['team2'];
                $points = $team['away'];
                $goals['goals'] = $result[1];
                $goals['goalA'] = $result[0];
                $goals['goalDiff'] = $result[1] - $result[0];
                if ($points == 3) {
                    $wdl['win'] = 1;
                    $wdl['draws'] = 0;
                    $wdl['lost'] = 0;
                } elseif ($points == 1) {
                    $wdl['win'] = 0;
                    $wdl['draws'] = 1;
                    $wdl['lost'] = 0;
                } elseif ($points == 0) {
                    $wdl['win'] = 0;
                    $wdl['draws'] = 0;
                    $wdl['lost'] = 1;
                }
            }
            $theTeam = $this->getTeam($teamID);

            $points += $theTeam['points'];
            $goals['goals'] += $theTeam['goals'];
            $goals['goalA'] += $theTeam['goalA'];
            $goals['goalDiff'] += $theTeam['goalDiff'];
            $wdl['win'] += $theTeam['win'];
            $wdl['draws'] += $theTeam['draws'];
            $wdl['lost'] += $theTeam['lost'];

            $teamDB = new Team($points, $teamID, $goals, $wdl);

            $sql = 'UPDATE ' . self::table . ' SET games = ?, win = ?, draws = ?,
                    lost = ?, goals = ?, goalA = ?, goalDiff = ?, points = ?';
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute(array($teamDB->getGames(),
                $teamDB->getWin(),
                $teamDB->getDraws(),
                $teamDB->getLost(),
                $teamDB->getGoals(),
                $teamDB->getGoalA(),
                $teamDB->getGoalDiff(),
                $teamDB->getPoints()
            ));
        }
    }

}