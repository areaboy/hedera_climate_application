<?php

error_reporting(0);
include('settings.php');
$timerx = time();

session_start();
include ('authenticate.php');



$userid_sess =  htmlentities(htmlentities($_SESSION['user_id_session'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['user_fullname_session'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['user_session'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['user_email_session'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['user_photo_session'], ENT_QUOTES, "UTF-8"));
$status_sess =  htmlentities(htmlentities($_SESSION['user_status_session'], ENT_QUOTES, "UTF-8"));
$crypto_sess =  htmlentities(htmlentities($_SESSION['user_crypto'], ENT_QUOTES, "UTF-8"));


include('data6rst.php');

$fullname = $fullname_sess;
$userid =$userid_sess;
$email= $email_sess;


$mt = microtime(true);
$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
//echo $dt2=date("Y-m-d H:i:s");

 $dt2=date("Y/m/d");
$date = strtotime($dt2);
 //echo $day_month = date('j M ', $date);

$month = date('M ', $date);
$year = date('Y ', $date);



//$offering1 = str_replace(' ', '-', $offering);


$pickup_address = strip_tags($_POST['pickup_address']);
$city = strip_tags($_POST['city']);
$info = strip_tags($_POST['info']);
$glass = strip_tags($_POST['glass']);
$paper_card = strip_tags($_POST['paper_card']);
$metals = strip_tags($_POST['metals']);
$plastic = strip_tags($_POST['plastic']);
$textiles = strip_tags($_POST['textiles']);
$weee_metals = strip_tags($_POST['weee_metals']);
$iba_metals = strip_tags($_POST['iba_metals']);
$other = strip_tags($_POST['other']);
$rewards = strip_tags($_POST['rewards']);

$pickup_addressx ="$pickup_address, $city , England";

/*
CREATE TABLE `recycling` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`userid` varchar(200) DEFAULT NULL,
`fullname` varchar(200) DEFAULT NULL,
`email` varchar(130) DEFAULT NULL,
`pickup_address` varchar(130) DEFAULT NULL,
`city` varchar(130) DEFAULT NULL,
`info` varchar(130) DEFAULT NULL,
`glass` varchar(130) DEFAULT NULL,
`paper_card` varchar(130) DEFAULT NULL,
`metals` varchar(130) DEFAULT NULL,
`plastic` varchar(130) DEFAULT NULL,
`textiles` varchar(130) DEFAULT NULL,
`weee_metals` varchar(130) DEFAULT NULL,
`iba_metals` varchar(130) DEFAULT NULL,
`other` varchar(130) DEFAULT NULL,
`timing` varchar(130) DEFAULT NULL,
`timing2` varchar(130) DEFAULT NULL,
`lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
*/



// Get Google Maps Geo-Cordinates API Calla
$geo_address = trim($pickup_addressx);

//$geo_address = $pickup_address;
$address = urlencode($geo_address);
// geocode geo location address to longitudes and latitudes

$call_url ="https://maps.googleapis.com/maps/api/geocode/json?key=$google_map_keys&address=$address&sensor=false";
 $res = file_get_contents($call_url);
 $json = json_decode($res, true);
 //print_r($json);


if($json['status'] == 'REQUEST_DENIED'){
$er = $json['error_message'];
echo "<div  style='background:red;color:white;padding:8px;border:none;' class='' id='alerts_reg'>Error: $er</div>";
exit();
}

        if($json['status']=='OK'){

         $lat = $json['results'][0]['geometry']['location']['lat'];
         $lng = $json['results'][0]['geometry']['location']['lng'];
         $formatted_address = $json['results'][0]['formatted_address'];

}else{
echo "<div  style='background:red;color:white;padding:8px;border:none;' class='' id='alerts_reg'>Address Could not be Formatted via Google Map Reverse Geo-Codings. Please Ensure Internet Connection & Try Again</div>";
exit();
}

          $lat = $json['results'][0]['geometry']['location']['lat'];
         $lng = $json['results'][0]['geometry']['location']['lng'];
		 


$total_waste = $glass + $paper_card + $metals + $plastic + $iba_metals + $textiles + $weee_metals + $other;
$t_reward = $total_waste * 100;

$statement = $db->prepare('INSERT INTO recycling
(userid,fullname,email,pickup_address,city,info,glass,paper_card,metals,plastic,textiles,weee_metals,iba_metals,other, timing, timing2, lat, lng,status,monthx,yearx,rewards,hedera_account)
                        values
(:userid,:fullname,:email,:pickup_address,:city,:info,:glass,:paper_card,:metals,:plastic,:textiles,:weee_metals, :iba_metals, :other, :timing,:timing2, :lat, :lng,:status,:monthx,:yearx,:rewards,:hedera_account)');
$statement->execute(array( 
':userid' => $userid,
':fullname' => $fullname,
':email' => $email,
':pickup_address' => $pickup_addressx,
':city' => $city,
':info' => $info,
':glass' => $glass,
':paper_card' => $paper_card,
':metals' => $metals,
':plastic' => $plastic,
':textiles' => $textiles,
':weee_metals' => $weee_metals,
':iba_metals' => $iba_metals,
':other' => $other,
':timing' => $timer,
':timing2' => $created_time,
':lat' => $lat,
':lng' => $lng,
':status' => 'awaiting',
':monthx' => $month,
':yearx' => $year,
':rewards' => $t_reward,
':hedera_account' => $crypto_sess


));

$res = $db->query("SELECT LAST_INSERT_ID()");
$lastId_post = $res->fetchColumn();




$pst = $db->prepare('select * from users_recycling where userid=:userid');
$pst->execute(array(':userid' =>$userid));
$r = $pst->fetch();
//$rc = $pst->rowCount();


// update glass
$glass_count=$r['glass'];
$glass_final_count = $glass_count + $glass;

// update paper_card
$paper_card_count=$r['paper_card'];
$paper_card_final_count = $paper_card_count + $paper_card;

// update metals
$metals_count=$r['metals'];
$metals_final_count = $metals_count + $metals;

// update plastic
$plastic_count=$r['plastic'];
$plastic_final_count = $plastic_count + $plastic;


// update textiles
$textiles_count=$r['textiles'];
$textiles_final_count = $textiles_count + $textiles;

// update weee_metals
$weee_metals_count=$r['weee_metals'];
$weee_metals_final_count = $weee_metals_count + $weee_metals;

// update iba_metals
$iba_metals_count=$r['iba_metals'];
$iba_metals_final_count = $iba_metals_count + $iba_metals;


// update other Materials
$other_count=$r['other'];
$other_final_count = $other_count + $other;


// update rewards
$c_r=$r['total_rewards'];
$c_r_count = $c_r + $t_reward;




$update= $db->prepare('UPDATE users_recycling set glass =:glass, paper_card =:paper_card, metals=:metals, plastic=:plastic,textiles=:textiles, weee_metals=:weee_metals, iba_metals=:iba_metals, other=:other, total_rewards =:total_rewards  where userid=:userid');
$update->execute(array(
':glass' => $glass_final_count,
':paper_card' => $paper_card_final_count,
':metals' => $metals_final_count,
':plastic' => $plastic_final_count,
':textiles' => $textiles_final_count,
':weee_metals' => $weee_metals_final_count,
':iba_metals' => $iba_metals_final_count,
':other' => $other_final_count,
':total_rewards' => $c_r_count,
 ':userid' =>$userid));




if($update){
echo "<div  style='background:green;color:white;padding:8px;border:none;' class='' id='alerts_reg'>Data Successfully Submitted</div>
<script>location.reload();</script>";

}else{

echo "<div  style='background:red;color:white;padding:8px;border:none;' class='' id='alerts_reg'>Data Successfully Failed</div>";
}


















/*

// initialize settings parameters.
include('settings.php');

// Get Google Maps Geo-Cordinates API Calla
$geo_address = trim($_POST['geo_address']);

$geo_address ='10th Avenue 35010, Alexander City, Alabama, United State';
$address = urlencode($geo_address);
// geocode geo location address to longitudes and latitudes

$call_url ="https://maps.googleapis.com/maps/api/geocode/json?key=$google_map_keys&address=$address&sensor=false";
 $res = file_get_contents($call_url);
 $json = json_decode($res, true);
//print_r($json);

        if($json['status']='OK'){

         $lat = $json['results'][0]['geometry']['location']['lat'];
         $lng = $json['results'][0]['geometry']['location']['lng'];
         $formatted_address = $json['results'][0]['formatted_address'];

}else{
echo "<div  style='background:red;color:white;padding:8px;border:none;' class='' id='alerts_reg'>Address Could not be Formatted via Google Map Reverse Geo-Codings. Please Try Again</div>";
exit();
}

         echo $lat = $json['results'][0]['geometry']['location']['lat'];
         echo $lng = $json['results'][0]['geometry']['location']['lng'];
		 

*/


       

?>