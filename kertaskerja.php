<?php // ralat pada pembuka php

//Array Jujukan
$result = array ( //array pertama = pelajar
    "Baihaqi" => array ('KPD4015'=>80, 'SEJARAH'=>80, 'DISCRETE MATH'=>90, 'KPD4024'=>85, 'P.ISLAM'=>90 ), // ralat pada pembuka dan penutup bracket
    "Iskandar" => array ('KPD4015'=>70, 'SEJARAH'=>75, 'DISCRETE MATH'=>92, 'KPD4024'=>87, 'P.ISLAM'=>91 ), // ralat pada tidak meletak ","
    "Muzaffar" => array ('KPD4015'=>90, 'SEJARAH'=>92, 'DISCRETE MATH'=>73, 'KPD4024'=>69, 'P.ISLAM'=>78 ),
    "Faris Ahmad" => array ('KPD4015'=>60, 'SEJARAH'=>72, 'DISCRETE MATH'=>83, 'KPD4024'=>79, 'P.ISLAM'=>75 ),
    "Nazmi Muhammad" => array ('KPD4015'=>96, 'SEJARAH'=>92, 'DISCRETE MATH'=>93, 'KPD4024'=>82, 'P.ISLAM'=>76 )
    );
foreach ($result as $pelajar => $value){
    {
        echo "Pelajar: ".$pelajar;
        echo "<br>";
    } 
foreach ($value as $subjek => $result) // ralat pada sintaks
    {
        echo "Subjek: ".$subjek." Result: ".$result; // ralat pada sintaks
        echo "<br>";
        
    }   echo "________________________________________";
        echo "<br>";
}
?>
