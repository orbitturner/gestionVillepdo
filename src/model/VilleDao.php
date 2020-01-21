<?php
    require_once 'DB.php';

    //==================| ADD CITY |==================
    function addCity($cityName, $latitude, $longitude){
        global $db;

        $req = "INSERT INTO ville Values (null,'$cityName', $latitude, $longitude, 1)";
        
        return $db->exec($req); 
    }
    //==================| REMOVE CITY |==================
    function delCity($idCity){
        global $db;
        
        $sql = "UPDATE ville SET state = 0 WHERE id = $idCity";
        
        return $db->exec($sql); 
    }
    
    //==================| FIND CITY BY NAME |==================
    function findCityByName($cityName){
        $sql = "SELECT * FROM ville WHERE cityname='$cityName'";
        
        global $db;

        return $db->query($sql)->fetch();
    }

    //==================| GET ALL CITY |==================
    function getAllCity(){
        $sql = "SELECT * FROM ville WHERE state=1";
        
        global $db;
        
        return $db->query($sql)->fetchAll();
    }

    //==================| GET ALL CITY |==================
    function countAllCity(){
        $sql = "SELECT COUNT(id) as nbCity from ville WHERE state=1";

        global $db;

        return $db->query($sql)->fetch();
    }
?>