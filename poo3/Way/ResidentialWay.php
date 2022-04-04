<?php

final class ResidentialWay extends HighWay
{

    public function __construct(
        int $nbLane = 2,
        int $maxSpeed = 50,
    ) {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicule $vehicule)
    {
        return $this->currentVehicles[] = $vehicule;
    }
}