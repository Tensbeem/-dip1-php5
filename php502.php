<?php
$season = array("Summer","Winter","Spring","Atumn");
$season[4] = "Special"; //4

echo $lenght = count($season); //5

echo "$season[0]<br />";
echo "$season[1]<br />";
echo "$season[2]<br />";
echo "$season[3]<br />";
echo "$season[4]<br />";
for ($i = 0; $i <= $lenght - 1; $i = $i +1){
    echo $season[$i]. ",";
}

?>