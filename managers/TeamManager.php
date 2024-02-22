<?php

class TeamManager extends AbstractManager{

    public function findAll() : array {
        $query = $this->db->prepare('SELECT * FROM teams');
        $query->execute();
        $teams = $query->fetchAll(PDO::FETCH_ASSOC);
        $teams_array = [];

        foreach($teams as $team) {
            $mm = new MediaManager();
            $media = $mm->findOne($team["logo"]);
            $newTeam = new Team($team["name"], $team["description"], $media);
            $newTeam->setId($team["id"]);
            $teams_array[] = $newTeam;
        }

        return $teams_array;
    }

    public function findOne(int $teamId) : Team {
        $query = $this->db->prepare('SELECT * FROM teams WHERE id = :id');
        $parameters = [
            "id" => $teamId
        ];
        $query->execute($parameters);
        $team = $query->fetch(PDO::FETCH_ASSOC);
        $mm = new MediaManager();
        $media = $mm->findOne($team["logo"]);
        $newTeam = new Team($team["name"], $team["description"], $media);
        $newTeam->setId($team["id"]);

        return $newTeam;
    }
}