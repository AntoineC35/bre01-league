<?php


class PageController extends AbstractController
{
    
    public function home() : void {
        $tm = new TeamManager();
        $teams = $tm->findAll();
        $pm = new PlayerManager();
        $players = $pm->findAll();
        $gm = new GameManager();
        $games = $gm->findAll();
        $lastGame = $gm->findLast();
        $this->render("home.html.twig", ["teams"=>$teams, "players"=>$players, "games"=>$games, "lastGame"=>$lastGame]);
    }

    public function teams() : void {
        $tm = new TeamManager();
        $teams = $tm->findAll();
        $this->render("teams.html.twig", ["teams"=>$teams]);
    }

    public function team() : void {
        $tm = new TeamManager();
        $pm = new PlayerManager();
        $players = $pm->findAll();
        $team = $tm->findOne($_GET["id"]);
        $this->render("team.html.twig", ["team"=>$team, "players"=>$players]);
    }

    public function players() : void {
        $pm = new PlayerManager();
        $players = $pm->findAll();
        $this->render("players.html.twig", ["players"=>$players]);
    }
}