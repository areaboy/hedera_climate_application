
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

//error_reporting(0);
include('settings.php');
include('data6rst.php');

// get total count
$pstmt = $db->prepare('SELECT * FROM composting where userid=:userid');
$pstmt->execute(array(':userid' =>$userid_sess));
$total_count = $pstmt->rowCount();

// ensure that they cotain only alpha numericals
if(strip_tags(isset($_POST["get_content"]))){
$get_content = strip_tags($_POST["get_content"]);
if($get_content == 'get_data'){

$sql_query = '';
$error = '';
$message='';
$response_bl = array();

$sql_query .= "SELECT * FROM composting ";
if(strip_tags(isset($_POST["search"]["value"]))){

$search_value1= strip_tags($_POST["search"]["value"]);
$search_value=  htmlentities(htmlentities($search_value1, ENT_QUOTES, "UTF-8"));
$sql_query .= 'WHERE (userid =:userid) AND  (fullname LIKE "%'.$search_value.'%"  OR  email LIKE "%'.$search_value.'%" OR pickup_address LIKE "%'.$search_value.'%"  OR city LIKE "%'. $search_value.'%" OR monthx LIKE "%'. $search_value.'%" OR yearx LIKE "%'. $search_value.'%" OR userid LIKE "%'. $search_value.'%")';


//$sql_query .= 'WHERE fullname LIKE "%'.$search_value.'%" ';
//$sql_query .= 'OR email LIKE "%'.$search_value.'%" ';
//$sql_query .= 'OR pickup_address LIKE "%'.$search_value.'%" ';
//$sql_query .= 'OR city LIKE "%'. $search_value.'%" ';
//$sql_query .= 'OR monthx LIKE "%'. $search_value.'%" ';
//$sql_query .= 'OR userid LIKE "%'. $search_value.'%" ';
//$sql_query .= 'OR yearx LIKE "%'. $search_value.'%" ';
  }



//ensure that order post is set
$start = $_POST['start'];
$length = $_POST['length'];
$draw= $_POST["draw"];
if(strip_tags(isset($_POST["order"]))){
$order_column = strip_tags($_POST['order']['0']['column']);
$order_dir = strip_tags($_POST['order']['0']['dir']);

$sql_query .= 'ORDER BY '.$order_column.' '.$order_dir.' ';
}
else{
$sql_query .= 'ORDER BY id DESC ';
}
if($length != -1){
$sql_query .= 'LIMIT ' . $start . ', ' . $length;
}

$pstmt = $db->prepare($sql_query);
$pstmt->execute(array(':userid' =>$userid_clean));
$rows_count = $pstmt->rowCount();



while($row = $pstmt->fetch()){
$rows1 = array();
$id = $row['id'];
$fullname = $row['fullname'];
$email_address = $row['email'];
$id = $row['id'];
$userid = $row['userid'];
$pickup_address = $row['pickup_address'];
$city = $row['city'];
$info = $row['info'];
$compost_material = $row['compost_material'];
$compost_material_lbs = $row["compost_material_lbs"];
$timing = $row['timing'];
$timing2 = $row['timing2'];
$lat = $row['lat'];
$lng = $row['lng'];

$status = $row['status'];
$month = $row['monthx'];
$year = $row['yearx'];
$rewards = $row['rewards'];



if($status =='awaiting'){

$stat  ="<span class='status_css'>Waste Awaiting Collection</span>";

}


if($status =='collected'){

$stat  ="<span class='status_css2'>Waste Collected & Rewarded</span>";

}



$waste_approval= "
<button style='display:none;' disabled id='' title='Mark Waste as Collected & Awards Points' class='approve_btn  btn btn-primary btn-xs'
 data-id='$id'
 data-userid='$userid'
data-fullname='$fullname'
data-email='$email_address'

 >
 Mark Waste as  <br>Collected & <br>Awards Points</button>
 <div class='approveloader-updates_$id'></div>
   <div class='approveresult-updates_$id'></div>";






$approve ="<b>Status:</b> $stat $waste_approval";
       



$user_info= "
<div>
<a target='_blank' style='display:none;' disabled href='profile.php?userid=$userid' title='View User Profile' class='' style='color:white;background:fuchsia;padding:8px;font-size:12px;'>
 Profile</a> 
</div>
<br>
<div>
<a target='_blank' style='display:none;' disabled href='reycling_users_map.php?identity=$id&userid=$userid' title='View Users Map' class='category_post1'>
User_Map</a> 

</div>
<br>
<button style='display:none;' disabled title='Get Direction' data-toggle='modal' data-target='#myModal_map_direction' class='category_post1x btn_action_map' 
data-lat='$lat' data-lng='$lng' data-id='$id' data-userid='$userid' data-pickup_address='$pickup_address' data-fullname='$fullname'>Map<br> Direction</button>

";


              
$rows1[] = $fullname;
$rows1[] = $pickup_address;
$rows1[] = $compost_material;
$rows1[] = $compost_material_lbs;
$rows1[] = $rewards.'(tinybars)';
$rows1[] = '<span data-livestamp="'.$timing.'"></span>';
$rows1[] = $approve;



$rows1[] = "

<button type='button'  class='btn btn-warning btn-xs btn_action' data-toggle='modal' data-target='#myModal_edit'
data-id='$id'
data-fullname='$fullname'
data-userid='$userid'
data-email='$email_address'
data-pickup_address='$pickup_address'
data-city='$city'
data-info='$info'
data-compost_material='$compost_material'
data-compost_material_lbs='$compost_material_lbs'
data-timing1='$timing'
data-timing2='$timing2'
data-status='$status',
data-lat='$lat'
data-lng='$lng'
data-month='$month'
data-year='$year'
data-rewards='$rewards'
>View Info</button>


<button style='display:none;' disabled id='' title='Delete' class='delete_btn btn btn-danger btn-xs'
 data-id='$id'
 data-userid='$userid'
 >
 Delete</button>
 <div class='dloader-updates_$id'></div>
   <div class='dresult-updates_$id'></div>

<button type='button' style='display:none;' disabled class='btn btn-primary btn-xs btn_call' data-toggle='modal' data-target='#myModal_email'
data-id='$id'
data-fullname='$fullname'
data-email='$email_address'
data-userid='$userid'
>Send Email</button>

";





$response_bl[] = $rows1;
}

$data = array(
"draw"    => $draw,
"recordsTotal"  => $rows_count,
"recordsFiltered" => $total_count,
"data"    => $response_bl);
}// you can close this



 //}
 
 





 echo json_encode($data);
}



?>