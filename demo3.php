<?php
    $array = Array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Ramesh"=>"40");

    function asc_Val($array){
        asort($array);
        return "<h3>Ascending order sort by value: </h3>".implode(" ", $array);
    }
    function asc_Key($array){
        ksort($array);
        return "<h3>Ascending order sort by key: </h3>".implode(" ", $array);
    }
    function desc_Val($array){
        arsort($array);
        return "<h3>Descending order sort by value: </h3>".implode(" ", $array);
    }
    function desc_Key($array){
        krsort($array);
        return "<h3>Descending order sort by key: </h3>".implode(" ", $array);
    }
    function myfunction($v) {
        $v=strtolower($v);
        return $v;
    }

    echo "<h3>List of arrays: </h3>";
    print_r(array_map("myfunction",$array ));
    
    echo asc_Val($array)."<br>";
    echo asc_Key($array)."<br>";
    echo desc_Val($array)."<br>";
    echo desc_Key($array)."<br>";

 
?>