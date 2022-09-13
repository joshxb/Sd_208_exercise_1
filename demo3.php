<?php
    $array = Array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Ramesh"=>"40");
    function asc_Val($array){
        asort($array);
        echo "<h3>Ascending order sort by value: </h3>";
        foreach($array as $x => $vals){
            echo "$x => $vals<br>";
        }
    }
    function asc_Key($array){
        ksort($array);
        echo "<h3>Ascending order sort by key: </h3>";
        foreach($array as $x => $vals){
            echo "$x => $vals<br>";
        }
    }
    function desc_Val($array){
        arsort($array);
        echo "<h3>Descending order sort by value: </h3>";
        foreach($array as $x => $vals){
            echo "$x => $vals<br>";
        }
    }
    function desc_Key($array){
        krsort($array);
        echo "<h3>Descending order sort by key: </h3>";
        foreach($array as $x => $vals){
            echo "$x => $vals<br>";
        }
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