<?php

$array = array('baby', 'dog', 'cat', 'lion');
$assoc = array('baby' => 'cry', 
				'dog' => 'bark', 
				'cat' => 'meow',
				'lion' => 'roar');

echo $assoc['cat']."<br>";
echo $array[1]."<br>";

$i=0;
while($i<4){

	echo $array[$i]." &nbsp; &nbsp;";
	$i++;
}


?>