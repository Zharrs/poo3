<?php

final class Motorway extends HighWay
{

    public function __construct(
        int $nbLane = 4,
        int $maxSpeed = 130,
    ) {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicule $vehicule): ?array
    {
        if (!($vehicule instanceof bike) && !($vehicule instanceof skate)){
            return $this->currentVehicles[] = $vehicule;
        }
        else {
            return null;
        }
    }
}