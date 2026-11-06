<?php
class Car {
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energyType;
    private int $energyLevel;
    private bool $isStart;

    public function __construct(int $nbWheels, string $color, int $nbSeats, string $energyType) {
        $this->nbWheels = $nbWheels;
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energyType = $energyType;
        $this->energyLevel = 100;
        $this->isStart = false;
    }

    public function start(): string {
        if ($this->energyLevel > 0) {
            if ($this->isStart === false) {
                $this->isStart = true;
                return "La voiture démarre.";
            } else return "La voiture est déjà démarrée.";
        } else return "La voiture ne peut pas démarrer, il n'y a plus d'énergie.";
    }

    public function forward(): string {
        if ($this->energyLevel > 0) {
            if ($this->isStart === true) {
                $this->currentSpeed = 15;
                $this->energyLevel = $this->energyLevel - 1;
                return "Go !";   
            } else return "La voiture n'est pas démarrée.";
        } else return "La voiture n'a plus dénergie";
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function setNbWheels(int $nbWheels): void {
        if ($nbWheels >= 0) { 
            $this->nbWheels = $nbWheels;
        }
    }

    public function getNbWheels(): int {
        return $this->nbWheels;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function setColor(string $color): void {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getNbSeats(): int {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void {
        if ($nbSeats >= 0) {    
            $this->nbSeats = $nbSeats;
        }
    }

    public function getEnergyType(): string {
        return $this->energyType;
    }

    public function setEnergyType(string $energyType): void {
        $this->energyType = $energyType;
    }

    public function getEnergyLevel(): int {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void {
        if ($energyLevel >= 0){
            $this->energyLevel = $energyLevel;
        }
    }

    public function setIsStart(bool $isStart): void {
        $this->isStart = true;
    }

    public function getIsStart (bool $isStart): string {
        if ($this->isStart === true) {
            return "La voiture est démarrée.";
        } else return "La voiture n'est pas démarrée.";
    }
}