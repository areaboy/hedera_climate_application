

<?php
//error_reporting(0);

//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST');
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);


include('data6rst.php');

$data[] = array('Recycle_Materials',  'Glass','Paper_Card', 'Metals', 'Plastic', 'Textiles', 'WEEE_Metal', 'IBA_Metals', 'Other_Materials');

$res = $db->prepare('SELECT 
SUM(glass) AS value_glass,
 SUM(paper_card) AS value_paper_card,
 SUM(metals) AS value_metals,
SUM(plastic) AS value_plastic,
SUM(textiles) AS value_textiles,
SUM(weee_metals) AS value_weee_metals,
SUM(iba_metals) AS value_iba_metals,
SUM(other) AS value_other
FROM recycling');
$res->execute(array());
$nosofrows = $res->rowCount();
//$row = $res->fetch(PDO::FETCH_ASSOC);
while($row = $res->fetch()){

$glass = $row['value_glass'];
$paper_card = $row['value_paper_card'];
$metals = $row['value_metals'];
$plastic = $row['value_plastic'];
$textiles = $row['value_textiles'];
$weee_metals = $row['value_weee_metals'];
$iba_metals = $row['value_iba_metals'];
$other = $row['value_other'];


//$reports= 'Recycle_Materials';

$reports= 'Recycle_Materials';
$data[] = array($reports, (int)$glass,(int)$paper_card,(int)$metals,(int)$plastic,(int)$textiles,(int)$weee_metals,(int)$iba_metals,(int)$other);
}


echo json_encode($data);

