<?php
error_reporting(0);


include('data6rst.php');

$id = strip_tags($_POST['id']);
$glass = strip_tags($_POST['glass']);
$paper_card = strip_tags($_POST['paper_card']);
$metals = strip_tags($_POST['metals']);
$plastic = strip_tags($_POST['plastic']);
$textiles = strip_tags($_POST['textiles']);
$weee_metals = strip_tags($_POST['weee_metals']);
$iba_metals = strip_tags($_POST['iba_metals']);
$other = strip_tags($_POST['other']);




$update= $db->prepare('UPDATE recycling set glass =:glass, paper_card =:paper_card, metals=:metals, plastic=:plastic,textiles=:textiles, weee_metals=:weee_metals, iba_metals=:iba_metals, other=:other  where id=:id');
$update->execute(array(
':glass' => $glass,
':paper_card' => $paper_card,
':metals' => $metals,
':plastic' => $plastic,
':textiles' => $textiles,
':weee_metals' => $weee_metals,
':iba_metals' => $iba_metals,
':other' => $other,
':id' =>$id));




if($update){

echo "<script>alert('Edit Successful'); location.reload();</script>";
echo "<div id='alertdata' style='background:green;color:white;padding:10px;border:none;'>Edit Successful</div>";

}else{
echo "<div id='alertdata' style='background:red;color:white;padding:10px;border:none;'>Edit Failed</div>";
}


?>