<?php
error_reporting(0);
session_start();

$userid_sess =  htmlentities(htmlentities($_SESSION['user_id_session'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['user_fullname_session'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['user_session'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['user_email_session'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['user_photo_session'], ENT_QUOTES, "UTF-8"));
$status_sess =  htmlentities(htmlentities($_SESSION['user_status_session'], ENT_QUOTES, "UTF-8"));

$userid_clean = strip_tags($userid_sess);

//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST');
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);




include('data6rst.php');
$obj = (object) array('role' => 'style', 'type' => 'string');
$data[] = array('Waste Recycling','Recycling Materials', $obj);


$res = $db->prepare('SELECT 
SUM(glass) AS value_glass,
 SUM(paper_card) AS value_paper_card,
 SUM(metals) AS value_metals,
SUM(plastic) AS value_plastic,
SUM(textiles) AS value_textiles,
SUM(weee_metals) AS value_weee_metals,
SUM(iba_metals) AS value_iba_metals,
SUM(other) AS value_other
FROM recycling where userid=:userid');
$res->execute(array(':userid' =>$userid_clean));
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

$data[] = array('Glass',(int)$glass, 'purple');
$data[] = array('Paper & Card',(int)$paper_card, 'gold');
$data[] = array('Metals',(int)$metals, 'navy');
$data[] = array('Plastics',(int)$plastic, 'green');
$data[] = array('Textiles',(int)$textiles, 'orange');
$data[] = array('WEEE Metals',(int)$weee_metals, '#800000');
$data[] = array('IBA Metals',(int)$iba_metals, 'fuchsia');
$data[] = array('Other Materials',(int)$other, 'pink');


//$data[] = array($reports,(int)$glass,(int)$paper_card,(int)$metals,(int)$plastic,(int)$textiles,(int)$weee_metals,(int)$iba_metals,(int)$other);
/*
$data[] = array('Glass',(int)$glass, 'purple');
$data[] = array('Paper & Card',(int)$paper_card, 'gold');
$data[] = array('Metals',(int)$metals, 'navy');
$data[] = array('Plastics',(int)$plastic, 'green');
$data[] = array('Textiles',(int)$textiles, 'orangle');
$data[] = array('WEEE Metals',(int)$weee_metals, 'magneta');
$data[] = array('IBA Metals',(int)$iba_metals, 'fuchsia');
$data[] = array('Other Materials',(int)$other, 'pink');
*/
}


echo json_encode($data);
