<?php

abstract class HighWay
{
    protected array $currentVehicles;
    protected int $nbLane ;
    protected int $maxSpeed;

    abstract public function addVehicle(Vehicule $vehicule);

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        if ($currentVehicles >= 0) {
            $this->currentVehicles = $currentVehicles;
        }
    }

    public function getnbLane(): int
    {
        return $this->nbLane;
    }

    public function setnbLane(int $nblane): void
    {
        if ($nblane >= 0) {
            $this->nblane = $nblane;
        }
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed): void
    {
        if ($maxSpeed >= 0) {
            $this->maxSpeed = $maxSpeed;
        }
    }
}

