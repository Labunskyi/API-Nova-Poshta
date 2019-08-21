<?php
require_once('src/Delivery/NovaPoshtaApi2.php');
require_once('src/Delivery/NovaPoshtaApi2Areas.php');

header('Access-Control-Allow-Origin: *');

$np = new \LisDev\Delivery\NovaPoshtaApi2('32b4a8c3bef07a2467c83b4c0c547977'); // API key from Nova Poshta

$wh = $np->getWarehouses('8d5a980d-391c-11dd-90d9-001a92567626'); // reference of Kiev city
$arr = [];
foreach ($wh['data'] as $warehouse) {
	
$arr[] = $warehouse['DescriptionRu'];
//print_r($arr);
}
//print_r($arr);
echo json_encode($arr, JSON_UNESCAPED_UNICODE);

