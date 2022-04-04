<?php

final class PedestrianWay extends HighWay
{

    public function __construct(
        int $nbLane = 1,
        int $maxSpeed = 10,
    ) {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicule $vehicule): ?array
    {
        if (!($vehicule instanceof bike) && ($vehicule instanceof skate)){
            return $this->currentVehicles[] = $vehicule;
        }
        else {
            return null;
        }
    }
}