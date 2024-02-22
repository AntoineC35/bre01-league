<?php

class GameManager extends AbstractManager {
    
    public function findAll() : array {
        $query = $this->db->prepare("
            SELECT *
            FROM games
        ");
        $query->execute();
        $games = $query->fetchAll(PDO::FETCH_ASSOC);

        $games_array = [];

        foreach($games as $game) {
            $tm = new TeamManager();
            $team1 = $tm->findOne($game["team_1"]);
            $team2 = $tm->findOne($game["team_2"]);
            $winTeam = $tm->findOne($game["winner"]);
            $newGame = new Game($game["name"], $game["date"], $team1, $team2, $winTeam);
            $newGame->setId($game["id"]);
            $games_array[] = $newGame;
        }
        return $games_array;
    }

    public function findLast() : Game {
        $query = $this->db->prepare("
            SELECT *
            FROM games
            ORDER BY games.date DESC
            LIMIT 1
        ");
        $query->execute();
        $game = $query->fetch(PDO::FETCH_ASSOC);

        $tm = new TeamManager();
        $team1 = $tm->findOne($game["team_1"]);
        $team2 = $tm->findOne($game["team_2"]);
        $winTeam = $tm->findOne($game["winner"]);
        $newGame = new Game($game["name"], $game["date"], $team1, $team2, $winTeam);
        $newGame->setId($game["id"]);

        return $newGame;

    }
}