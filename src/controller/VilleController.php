<?php
    require_once '../routes/dir.php';
    require_once '../model/villeDao.php';
    
// =========================[GET ALL CITY MARQUEURS BY AJAX ]=========================
    if (isset($_GET['cityList']) && $_GET['cityList'] == 1) {
        $listeVille = getAllCity();
        // var_dump($listeVille);
        $t = array();
        $i = 0;
        foreach ($listeVille as $ville) {
            $t[$i]['cityname'] = $ville['cityname'];
            $t[$i]['latitude'] = $ville['latitude'];
            $t[$i]['longitude'] = $ville['longitude'];
            $i++;
        }

        //echo json_encode($listeVille);
        echo json_encode($t);  
    }
    // var_dump($_POST);
    // array(4) { 
    //     ["cityname"]=> string(18) "Barcelone, Espagne" 
    //     ["latitude"]=> string(2) "42" 
    //     ["longitude"]=> string(1) "2" 
    //     ["addCityForm"]=> string(4) "true" }
// =========================[ADD A NEW CITY]=========================
    if (isset($_POST['addCityForm']) && !(empty($_POST['cityname'])) && !(empty($_POST['latitude'])) && !(empty($_POST['longitude']))) {
        extract($_POST);
        if ($addCityForm == 'true') {
            // Conversion        
            $latitude = floatval($latitude);
            $longitude = floatval($longitude);

            $persist = addCity($cityname, $latitude, $longitude);
            if ($persist >= 1) {
                header('location:'.getProjectRoot().'home');
            }else {
                echo "<h1 align='center'>ERREUR FORMULAIRE! </h1>";
            }
        }

    }else {
        if (isset($_POST['addCityForm']) && $_POST['addCityForm'] == 'true') {
            echo "<h1> ACCESS TO DATABASE DENIED !</h1></br><hr/>";
            echo "<h2> The Form is Not Valid or Had been Corrupted !</h2></br><hr/>";
            echo "<h3> Please  Contact the Administrator!</h3>";
            echo "<p> You will be redirected in 10 seconds</p>";
            //echo '<script>window.setTimeout("location=(\'http://localhost'.getProjectRoot().'home\');",5000);</script>';
        }
    }   
?>