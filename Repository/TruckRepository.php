<?php

include ('../databaseConnection/databaseConnection.php');

class TruckRepository
{
    public function findAllGreaterTrcuks(): array
    {

        $result = $conn->query(
            "SELECT *
                    FROM truck");

        while($row = mysql_fetch($result)){
            $truck_array[] = $row;
        }

        // returns an array of all trucks
        return $truck_array;
    }


    public function findTruck(int $id)
    {

        $result = $conn->query(
            "SELECT id_truck, truck_name, id_type
                FROM truck
                WHERE id_truck = id
             "
        );

        return $result;
    }



}