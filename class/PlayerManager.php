<?php
require_once 'class/DBManager.php';

class PlayerManager{
    
    const table = 'players';
    private $dbh = null;
    
    public function  __construct(){
        $this->dbh = DBManager::getInstance()->getConnection();
    }
            function getPlayers() {
        $sql = 'SELECT * FROM '.self::table.' ORDER BY number';
        $stmt = $this->dbh->query($sql);
        //$stmt->setFetchMode(PDO::FETCH_ASSOC);
        $players = $stmt->fetchAll();
        
        
//        $player['data']['number'] = 1;
//        $player['data']['player'] = 'Roy Schnäpel';
//        $player['data']['position'] = 'Torwart';
        return $players;
    }

    
}