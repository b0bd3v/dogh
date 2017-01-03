<?php 

$exemple = [
	'2017-01-03' => '#FF3311',
	'2017-01-04' => '#F1FF55',
	'2017-01-05' => '#11FFFF',
	'2017-01-06' => '#000000'
];


foreach($exemple  as $date => $item){
	
	$processedItem = str_replace("#", "", $item);
	$rgb['r'] = hexdec($processedItem[0] . $processedItem[1]);   
	$rgb['g'] = hexdec($processedItem[2] . $processedItem[3]);
	$rgb['b'] = hexdec($processedItem[4] . $processedItem[5]);
	
	print($date . ':  ' . $rgb['r'] . " " . $rgb['g'] . " " . $rgb['b'] . "\n");	

}




?>
