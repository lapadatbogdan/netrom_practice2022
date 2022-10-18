<?php

class Truck
{
    private int $id_truck;

    private string $truck_name;

    private int $id_type;

    public function getIdTruck(): ?int
    {
        return $this->id_truck;
    }

    public function getTruckName(): ?string
    {
        return $this->truck_name;
    }

    public function getIdType(): ?int
    {
        return $this->id_type;
    }

}

?>