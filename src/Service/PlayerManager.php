<?php

namespace App\Model;

class PlayerManager
{
    function getPlayers()
    {
        $sql = 'SELECT * FROM ' . self::table . ' ORDER BY number';
        $stmt = $this->dbh->query($sql);
        //$stmt->setFetchMode(PDO::FETCH_ASSOC);
        $players = $stmt->fetchAll();


//        $player['data']['number'] = 1;
//        $player['data']['player'] = 'Roy Schnäpel';
//        $player['data']['position'] = 'Torwart';
        return $players;
    }


}