<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'admin');
define('DB_NAME', 'resonancehosting');

$dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR DIE ('Error connecting to MySQL Server');

$fetchAll = 'SELECT 
                countryID, 
                country_name, 
                alpha_code2,
                language_name, 
                language_name_native 
             FROM  country 
             LEFT JOIN LANGUAGE 
             ON countryID = languageID;';

$result = $dbc->query($fetchAll);

while($row = $result->fetch_array()){
    $countries[] = $row;
}
foreach($countries as $country){
    echo '<li>' . $country['country_name'] . '</li>';
}
?>