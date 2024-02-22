<?php 

class PlayerManager extends AbstractManager {

    public function findAll() : array{
            $query = $this->db->prepare('SELECT * FROM players');
            $query->execute();
            $players = $query->fetchAll(PDO::FETCH_ASSOC);
            $playersArray = [];
    
            foreach($players as $player) {
                $tm = new TeamManager();
                $team = $tm->findOne($player["team"]);
                $mm = new MediaManager();
                $portrait = $mm->findOne($player["portrait"]);
                $newPlayer = new Player($player["nickname"], $player["bio"], $portrait, $team);
                $newPlayer->setId($player["id"]);
                $playersArray[] = $newPlayer;
            }
    
            return $playersArray;
    }
}