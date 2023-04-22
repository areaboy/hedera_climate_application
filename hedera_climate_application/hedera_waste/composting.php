<?php

//error_reporting(0);
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
//$dt2=date("Y-m-d H:i:s");

 $dt2=date("Y/m/d");
$date = strtotime($dt2);
 //echo $day_month = date('j M ', $date);

$month = date('M ', $date);
$year = date('Y ', $date);


//$offering1 = str_replace(' ', '-', $offering);


$pickup_address = strip_tags($_POST['pickup_address']);
$city = strip_tags($_POST['city']);
$info = strip_tags($_POST['info']);
$compost_material = strip_tags($_POST['compost_material']);
$compost_material_lbs = strip_tags($_POST['compost_material_lbs']);
$rewards = strip_tags($_POST['rewards']);


$total_waste = $compost_material_lbs;
$t_reward = $total_waste * 100;


$pickup_addressx ="$pickup_address, $city , England";




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





$statement = $db->prepare('INSERT INTO composting
(userid,fullname,email,pickup_address,city,info,compost_material,compost_material_lbs, timing, timing2, lat, lng,status,monthx,yearx,rewards,hedera_account)
                        values
(:userid,:fullname,:email,:pickup_address,:city,:info,:compost_material,:compost_material_lbs, :timing,:timing2, :lat, :lng,:status,:monthx,:yearx,:rewards,:hedera_account)');
$statement->execute(array( 
':userid' => $userid,
':fullname' => $fullname,
':email' => $email,
':pickup_address' => $pickup_addressx,
':city' => $city,
':info' => $info,
':compost_material' => $compost_material,
':compost_material_lbs' => $compost_material_lbs,
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


// update compost_material
$c_count=$r['compost_material'];
$c_final_count = $c_count + $compost_material_lbs;


// update rewards
$c_r=$r['total_rewards'];
$c_r_count = $c_r + $t_reward;




$update= $db->prepare('UPDATE users_recycling set compost_material =:compost_material, total_rewards=:total_rewards  where userid=:userid');
$update->execute(array(
':compost_material' => $c_final_count,
':total_rewards' => $c_r_count,
 ':userid' =>$userid));




if($update){
echo "<div  style='background:green;color:white;padding:8px;border:none;' class='' id='alerts_reg'>Compost Data Successfully Submitted</div>
<script>location.reload();</script>";

}else{

echo "<div  style='background:red;color:white;padding:8px;border:none;' class='' id='alerts_reg'>Data Successfully Failed</div>";
}


      

?>