<?php

// class team name shirt_color 
// class player name price 
// class manger name price nationality


class Player
{
    protected string $name;
    protected string $shirt_color;
    protected int $number;
    protected float $price;

    public function __construct($name, $number, $shirt_color, $price)
    {
        $this->name = $name;
        $this->number = $number;
        $this->shirt_color = $shirt_color;
        $this->price = $price;
    }
    public function displayInfo()
    {
        echo "Player Name:{$this->name},Plyer Number: {$this->number},T-Shirt Color is:$this->shirt_color
        Price:{$this->price}'/ln'";
    }
}



class Manager extends Player
{

    private string $nationality;
    public function __construct($name, $nationality, $price)
    {
        parent::__construct($name, 50, "Red", $price);
        $this->nationality = $nationality;
    }

    public function displayInfo()
    {
        echo "Player Name:{$this->name},nationality is:$this->nationality
        Price:{$this->price}'/ln'";
    }
}


class Team
{
    private array $players = [];

    public function addPlayer(Player $player)
    {
        $this->players[] = $player;
    }

    public function displayPlayer()
    {
        foreach ($this->players as $player) {
            $player->displayInfo();
        }
    }
}



$team = new Team();


$player1 = new Player("Abou Trika", 22, "Red", 1500000);
$manager = new Manager("Manoual Joseh", "Prtogeso", 5000000);
echo "<pre>";

$team->addPlayer($player1);
$team->addPlayer($manager);



print_r($team);