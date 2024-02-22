<?php

class Game {
    private int $id;
    public function __construct(private string $name, private string $date, private Team $team_1, private Team $team_2, private Team $winner)
    {

    }


    /**
     * Get the value of id
     *
     * @return  mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param   mixed  $id  
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param   mixed  $name  
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of date
     *
     * @return  mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @param   mixed  $date  
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of team_1
     *
     * @return  mixed
     */
    public function getTeam_1()
    {
        return $this->team_1;
    }

    /**
     * Set the value of team_1
     *
     * @param   mixed  $team_1  
     *
     * @return  self
     */
    public function setTeam_1($team_1)
    {
        $this->team_1 = $team_1;

        return $this;
    }

    /**
     * Get the value of team_2
     *
     * @return  mixed
     */
    public function getTeam_2()
    {
        return $this->team_2;
    }

    /**
     * Set the value of team_2
     *
     * @param   mixed  $team_2  
     *
     * @return  self
     */
    public function setTeam_2($team_2)
    {
        $this->team_2 = $team_2;

        return $this;
    }

    /**
     * Get the value of winner
     *
     * @return  mixed
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set the value of winner
     *
     * @param   mixed  $winner  
     *
     * @return  self
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;

        return $this;
    }
}