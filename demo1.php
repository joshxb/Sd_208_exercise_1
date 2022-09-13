<?php

    $names = Array("Joshua", "Janrae", "Jomel", "Myla");

    function descend_Array($array){
        $string = "";
        rsort($array);
        for($i = 0; $i < count($array); $i++){
            $string .= $array[$i];
            if ($i < (count($array) - 1)){
                $string .= ", ";
               
            }else {
                $string .= "<br>";
            }
        }

        return $string;
        
    }
    echo descend_Array($names);
    echo descend_Array(["Joseph", "Nino", "Edward", "Felip"]);
    echo descend_Array(Array("April", "Jordan", "Sta. Ana", "Rose"));
