<?php

class Router
{
    private PageController $pc;

    public function __construct()
    {
        $this->pc = new PageController();
    }
    public function handleRequest(array $get) : void
    {
        if (isset($get["route"]) && $get["route"] === "home")
        {
            $this->pc->home();
        }
        else if (isset($get["route"]) && $get["route"] === "teams")
        {
            $this->pc->teams();
        }
        else if (isset($get["route"]) && $get["route"] === "team")
        {
            $this->pc->team();
        }
        else if (isset($get["route"]) && $get["route"] === "players")
        {
            $this->pc->players();
        }
        else
        {
            $this->pc->home();
        }
    }
}