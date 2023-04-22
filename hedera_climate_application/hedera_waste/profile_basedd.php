<?php
error_reporting(0); 
?>



<?php
session_start();
include ('authenticate.php');


$userid_sess =  htmlentities(htmlentities($_SESSION['uid2'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname2'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['username2'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['photo2'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['email2'], ENT_QUOTES, "UTF-8"));

//$user_rank = strip_tags($_SESSION['user_rank']);
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <title><?php include('header_title.php'); echo $header_tit; ?> - Welcome <?php echo htmlentities(htmlentities($_SESSION['fullname2'], ENT_QUOTES, "UTF-8")); ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">







<style>
.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}
  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:#008080;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }


.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: #008080;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}



.invite_btn{
background-color: purple;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.invite_btn:hover {
background: black;
color:white;
}


.course_btn{
background-color: red;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.course_btn:hover {
background: black;
color:white;
}


.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}


.modal_head_color{
background-color: fuchsia;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: fuchsia;
padding: 6px;
color:white;
}


/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:#008080;
    color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.footer_bgcolor{
background: black;
}

.footer_text1{
color:white;
font-size:20px;
border:none;
cursor:pointer;
}

.footer_text2{
color:grey;
font-size:14px;
border:none;
cursor:pointer;
}

.footer_text1:hover{
color:grey;
}


.footer_text2:hover{
color:orange;
}


.footer_dashedline{
 border-top: 1px dashed white;
}








.e_search_form{
width: 38vw;
height:60px;
padding:10px;
cursor:pointer;
border:none;
border-radius:15%;
color:black;
font-size:16px;
background:white;

//transform: skew(-22deg);
margin-left:-90px;

}

.e_search_form:hover{

border-style: solid; border-width:4px; border-color: #824c4e;
background: #dddddd;
color: black;
}



@media screen and (max-width: 768px) {
  .e_search_form{

  width: 100%;
  padding: 20px;
margin-left:0px;
  }
}



@media screen and (max-width: 600px) {
  .e_search_form{
  width: 100%;
  padding: 20px 
margin-left:0px; 
  }
}





.readmore_btn{
background-color: #008080;
padding: 6px;
color:white;
font-size:14px;
border-radius: 10%;
border: none;
cursor: pointer;
text-align: center;
//width:100%;
z-index: -999;
}
.readmore_btn:hover {
background: black;
color:white;
}	


.category_post1x{
background-color: purple;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}



.category_post1xx{
background-color: #3b5998;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}

</style>





    </head>
    <body>

 
</head>
<body>




<?php

$token = '1';
$usern  = '1';

?>



<script>

// stopt all bootstrap drop down menu from closing on click inside
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});


</script>


<!--start left column all-->

    <div class="left-column-all left_shifting">

<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo1.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">



<!--start post comments notification-->

<style>

.notify_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: green; padding: 2px 6px;font-size:14px; }
.notify_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:14px; }

</style>




<script>

$(document).ready(function(){

var userid_sess_data = '<?php echo $userid_sess; ?>';
$("#loader-notify_alert_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
var datasend = {userid_sess_data:userid_sess_data};

//alert(userid_sess_data);
	
		$.ajax({
			
			type:'POST',
			url:'notify_alert.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

//alert(msg);

$("#loader-notify_alert_posts").hide();
$("#result-notify_alert_posts").html(msg);
//setTimeout(function(){ $('#result-notify_alert_posts').html(''); }, 5000);	


			
	
}
			
		});
		
		

});


</script>


<li>
<span style='color:white;' class="dropdown fa fa-bell">
  <a style="color:white;font-size:14px;cursor:pointer;" title='Posts, Comments and Like Alerts' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown">
  <span class="notify_count"><span id="loader-notify_alert_posts"></span><span id="result-notify_alert_posts"></span></span>
</a>

<ul class="dropdown-menu" style='width:350px;height: 400px;overflow-y : scroll;'>
<h4 style='color:blue;'>Posts Shares and Comments Alerts</h4>
<button class="btn btn-primary" id="refresh_notify" title="Refresh Notification">Refresh Notification</button>
<br>


<script>

$(document).ready(function(){


var userid_sess_data = '<?php echo $userid_sess; ?>';
var username_sess_data = '<?php echo $userid_sess; ?>';

var sender_id=userid_sess_data;
var sender_username=username_sess_data;


if(sender_id ==''){
alert('something is wrong with Senders Id');
}


else{


$("#loader-load-notify-post").fadeIn(400).html('<br><div style="color:white;background:#ec5574;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait,Loading Your Notification Alerts...</div>');
var datasend = {sender_id:sender_id, sender_username:sender_username};


	
		$.ajax({
			
			type:'POST',
			url:'notification_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-load-notify-post").hide();
$("#result-load-notify-post").html(msg);
//setTimeout(function(){ $('#result-load-notify-post(''); }, 5000);				

//location.reload();	
}
			
		});
		
		}


});










$(document).ready(function(){

  $('#refresh_notify').click(function () {
var userid_sess_data = '<?php echo $userid_sess; ?>';
var username_sess_data = '<?php echo $userid_sess; ?>';

var sender_id=userid_sess_data;
var sender_username=username_sess_data;


if(sender_id ==''){
alert('something is wrong with Senders Id');
}


else{


$("#loader-load-notify-post").fadeIn(400).html('<br><div style="color:white;background:#ec5574;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait,Loading Your Notification Alerts...</div>');
var datasend = {sender_id:sender_id, sender_username:sender_username};


	
		$.ajax({
			
			type:'POST',
			url:'notification_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-load-notify-post").hide();
$("#result-load-notify-post").html(msg);
//setTimeout(function(){ $('#result-load-notify-post(''); }, 5000);				

//location.reload();	
}
			
		});
		
		}





// start notify 1


var userid_sess_data = '<?php echo $userid_sess; ?>';
$("#loader-notify_alert_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
var datasend = {userid_sess_data:userid_sess_data};

//alert(userid_sess_data);
	
		$.ajax({
			
			type:'POST',
			url:'notify_alert.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

//alert(msg);

$("#loader-notify_alert_posts").hide();
$("#result-notify_alert_posts").html(msg);
//setTimeout(function(){ $('#result-notify_alert_posts').html(''); }, 5000);	


			
	
}
			
		});
		


// end notify 1


});


});


</script>



<!-- form START-->
<div id="loader-load-notify-post"></div>
<div id="result-load-notify-post"></div>


<!--form ENDS-->

<p></p>

</ul></span>
&nbsp;&nbsp;
</li>


<!--end post comments notifications-->




             
 <li class="navgate"><a title='Create New Post' href="create_post.php" style="color:white;font-size:14px;">Create New <?php echo $poster; ?></a></li>       
<li class="navgate"><a title='View Dashboard' href="dashboard.php" style="color:white;font-size:14px;">Dashboard</a></li>


<li class="navgate"><img style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" src="uploads/<?php echo htmlentities(htmlentities($_SESSION['photo2'], ENT_QUOTES, "UTF-8")); ?>" width="80px" height="80px">


<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown"><?php echo htmlentities(htmlentities($_SESSION['fullname2'], ENT_QUOTES, "UTF-8")); ?>
  <span class="caret"></span></a>

<ul class="dropdown-menu col-sm-12">
<li><a title='My Profile' href="profile_base.php">My Profile/Posts</a></li>
<li><a title='Logout' href="logout.php">Logout</a></li>

</ul></span>

</li>



      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->








<div class='row'>
<br><br><br>

<!--Start Left-->
<div class='col-sm-3'>

//



</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-12'>



<!--create profile form START here-->

<?php

$request_userid=htmlentities(htmlentities($_SESSION['uid2'], ENT_QUOTES, "UTF-8"));


// Get Users Records from vertex Users in Tigergraph Database

include('settings.php');


//$url ="$tg_url:9000/graph/$graph_db/vertices/$table_users";

$url =''.$tg_url.':9000/graph/'.$graph_db.'/vertices/'.$table_users.'?filter=uid="'."$request_userid".'" ';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer $tg_accesstoken")); 
//curl_setopt($ch, CURLOPT_HTTPHEADER, array("accept: application/json", 'Content-Type: application/json'));  
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 

if($output ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Ensure there is Internet Connection and Try Again</div>";
//exit();
}



$json = json_decode($output, true);
$msg = $json["message"];
$vertex_id = $json["results"][0]["v_id"];
$email_x = $vertex_id;

if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: ($msg)</div>";
exit();
}


if($vertex_id ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>No Records posted to  Tigergraph Database Yet..</div>";
exit();
}





foreach($json["results"] as $row){

$vertex_id = $row["v_id"];
$vertex_type = $row["v_type"];
$id_email = $vertex_id;

$userid_x = $row["attributes"]["uid"];



$photo = htmlentities(htmlentities($row["attributes"]["photo"], ENT_QUOTES, "UTF-8"));

$timer = htmlentities(htmlentities($row["attributes"]["timer"], ENT_QUOTES, "UTF-8"));
$fullname = htmlentities(htmlentities($row["attributes"]["fullname"], ENT_QUOTES, "UTF-8"));
$points = htmlentities(htmlentities($row["attributes"]["points"], ENT_QUOTES, "UTF-8"));
$posts = htmlentities(htmlentities($row["attributes"]["posts"], ENT_QUOTES, "UTF-8"));
$comments = htmlentities(htmlentities($row["attributes"]["comments"], ENT_QUOTES, "UTF-8"));




?>


<div  class='col-sm-12' style='border-style: dashed; border-width:2px; border-color: orange;color:black;padding:10px;background:#eeeeee'>

<h3><center>View Your Profiles/Posts</center></h3>
<div class='col-sm-6'>
<img style='max-height:200px;max-width:200px;' class='img-rounded' width='200px' height='200px' src='uploads/<?php echo htmlentities(htmlentities($photo, ENT_QUOTES, "UTF-8")); ?>'>
<br>
</div>
<div class='col-sm-6'>
<b> Name:</b> <?php echo htmlentities(htmlentities($fullname, ENT_QUOTES, "UTF-8")); ?>
<br>
<b style='font-size:16px;color:green'> Awarded  Points:</b> <span title='Awarded Points:(<?php echo htmlentities(htmlentities($points, ENT_QUOTES, "UTF-8")); ?>) ' class='point_count'><?php echo htmlentities(htmlentities($points, ENT_QUOTES, "UTF-8")); ?> Points</span><br>
<b style='font-size:20px;color:#800000'> You Have: <?php echo $posts; ?> Posts</b><br>
<b style='font-size:16px;display:none;'> Member Since:</b> <span data-livestamp="<?php echo $timer;?>"></span> 
<br>
<div style='background:green;color:white;padding:10px;border-radius:20%;font-size:16px;'><i  style='font-size:20px;' class='fa fa-check'></i> User Verified</div>
</div>

</div>


<?php
}
?>



<div  class='col-sm-12' style='width:100%;'><br><br></div>






<!--create profile form ENDS-->




<!-- Main Post Database query starts here -->









<style>
.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }


</style>


        <div class="content">

            <?php



// Get Posts Records from vertex Posts in Tigergraph Database

//include('settings.php');


//$url ="$tg_url:9000/graph/$graph_db/vertices/$table_posts?sort=-timer";


$url =''.$tg_url.':9000/graph/'.$graph_db.'/vertices/'.$table_posts.'?sort=-timer&filter=userid="'."$request_userid".'" ';


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer $tg_accesstoken")); 
//curl_setopt($ch, CURLOPT_HTTPHEADER, array("accept: application/json", 'Content-Type: application/json'));  
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 $output = curl_exec($ch); 

if($output ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Ensure there is Internet Connection and Try Again</div>";
//exit();
}



$json = json_decode($output, true);
$msg = $json["message"];
$vertex_id = $json["results"][0]["v_id"];
$email_x = $vertex_id;

if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: ($msg)</div>";
exit();
}


if($vertex_id ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>No Records posted to  Tigergraph Database Yet..</div>";
exit();
}


foreach($json["results"] as $row){

$vertex_id = $row["v_id"];
$vertex_type = $row["v_type"];
$id = $vertex_id;

$title = $row["attributes"]["title"];
$title_seo = $row["attributes"]["title_seo"];
$content = htmlentities(htmlentities($row["attributes"]["content"], ENT_QUOTES, "UTF-8"));

$username = htmlentities(htmlentities($row["attributes"]["userid"], ENT_QUOTES, "UTF-8"));
$fullname = htmlentities(htmlentities($row["attributes"]["fullname"], ENT_QUOTES, "UTF-8"));
$userphoto = htmlentities(htmlentities($row["attributes"]["userphoto"], ENT_QUOTES, "UTF-8"));
$timer1 = htmlentities(htmlentities($row["attributes"]["timer"], ENT_QUOTES, "UTF-8"));
$points = htmlentities(htmlentities($row["attributes"]["points"], ENT_QUOTES, "UTF-8"));
$help_category = htmlentities(htmlentities($row["attributes"]["help_category"], ENT_QUOTES, "UTF-8"));
$offering = htmlentities(htmlentities($row["attributes"]["offering"], ENT_QUOTES, "UTF-8"));
$total_comment = htmlentities(htmlentities($row["attributes"]["total_comments"], ENT_QUOTES, "UTF-8"));
$data_type = htmlentities(htmlentities($row["attributes"]["data_type"], ENT_QUOTES, "UTF-8"));
$video = htmlentities(htmlentities($row["attributes"]["video"], ENT_QUOTES, "UTF-8"));
$photo = htmlentities(htmlentities($row["attributes"]["photo"], ENT_QUOTES, "UTF-8"));

$microcontent = substr($content, 0, 120)."...";


$address=htmlentities(htmlentities($row["attributes"]["address"], ENT_QUOTES, "UTF-8"));

$lat=htmlentities(htmlentities($row["attributes"]["latitude"], ENT_QUOTES, "UTF-8"));
$lng=htmlentities(htmlentities($row["attributes"]["longitude"], ENT_QUOTES, "UTF-8"));




$price_amount=htmlentities(htmlentities($row["attributes"]["price_amount"], ENT_QUOTES, "UTF-8"));
$price_status=htmlentities(htmlentities($row["attributes"]["price_status"], ENT_QUOTES, "UTF-8"));

$post_userid = htmlentities(htmlentities($row["attributes"]["userid"], ENT_QUOTES, "UTF-8")); 


if($price_status =='Free'){
$amt = 0;
$pc= 'Free';
}
if($price_status =='Paid'){
$amt = $price_amount;
$pc= 'Pay';
}


            ?>

                    <div class="post well">

<span class='point_count'><span>Awards: </span> <?php echo $points; ?> Points</span>
<button class='readmore_btn'><a title='Click to access users Profile page' style='color:white;' href='profile.php?id=<?php echo $username; ?>'><span style='font-size:20px;color:white;' class='fa fa-user'></span> View Profile Profile</a></button><br>

<h3>Category: <?php echo $offering; ?>   on <?php echo $help_category; ?>  </h3><br>


<div style=' color: #fff; display: block; max-width:150px;  border-radius: 48px; border: 1px solid #2E8E12; background: #008080; padding: 8px 24px;font-size:40px;float:right;'>
<b><?php echo $pc; ?></b> <span style='font-size:18px;'><?php echo $price_amount; ?> (USD)</span></div>


<img class='' style='border-style: solid; border-width:3px; border-color:#800000; width:80px;height:80px; 
max-width:80px;max-height:80px;border-radius: 50%;' src='uploads/<?php echo $userphoto; ?>'><br>
<b style='color:#800000;font-size:18px;' >Name: <?php echo $fullname; ?> </b><br>


<b class='title_css'>Title: <?php echo $title; ?></b><br>
<b >Descriptions:</b><br><?php echo $content; ?> <br>

<b >Full Location Address:</b>  <?php echo $address; ?><br>
<b >Latitude:</b> <?php echo $lat; ?><br>
<b >Longitude:</b> <?php echo $lng; ?><br>
      
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timer1;?>"></span></span> <br>


<span style="font-size:26px;color:#800000;" class="fa fa-comments"></span> 
&nbsp;<span id="<?php echo $postid; ?>"  style="color:#800000;cursor:pointer;" title="Comments" />Comments</span>
(<span><?php echo $total_comment; ?></span>)


<br>

<button class='readmore_btn btn btn-warning'><a title='Click to Read More' style='color:white;' 
href='reply.php?title=<?php echo $title_seo; ?>'>Read More & Reply/Comments</a></button>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button title="User Map Locations" data-toggle="modal" data-target="#myModal_map" class="category_post1x btn_action_map" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $lng; ?>" data-id="<?php echo $id; ?>"  data-title="<?php echo $title; ?>" data-identity="<?php echo $timer1; ?>">
<span style="font-size:26px;color:white;" class="fa fa-map-marker" aria-hidden="true"></span> Users Map Locations</button>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button class='category_post1xx btn btn-warning'><a title='Send Private Mail' style='color:white;' 
href='create_email.php?userid=<?php echo $username; ?>'><span style="font-size:26px;color:white;" class="fa fa-envelope"></span>  Send Private Mail</a></button>


                 
</div>





            <?php

                }
            ?>



<!-- Main Post Database query ends here-->

</div>








</div>
<!--End Right-->

</div>
<!--Row-->








<style>

.title_css{
//background: green;
color:green;
cursor:pointer;
font-size:24px;

}


.title_css:hover{
//background: purple;
color:purple;

}



.seeking_css{
background: #800000;
color:white;
padding:6px;
cursor:pointer;
border:none;
border-radius:10%;
font-size:16px;
}

.seeking_css:hover{
background: black;
color:white;

}



.offering_css{
background: green;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.offering_css:hover{
background: black;
color:white;

}



.cat_css{
background: #ec5574;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_css:hover{
background: black;
color:white;

}



</style>



<!--form START-->











<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">
        <div class="col-sm-12">

<p class="footer_text1"><?php echo $header_tit; ?></p>
<p class="footer_text2"><?php include('footer_title.php'); echo $footer_tit1; ?></p>
<br>

        </div>



        </div>

<br/>
  <p></p>
</footer>

<!-- footer Section ends -->






<!-- map  modal starts here -->


<div class="container_map">

  <div class="modal fade" id="myModal_map" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center pull-right1_no modaling_sizing1  full-screen-modal_no">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Users Map Locations</h4>
        </div>
        <div class="modal-body">





      <h3>Posters/Users Maps Locations</h3>

<!-- start map loading-->
<style>
#map {
        height: 80%;
      }
    
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
.res_center_css{
position:absolute;top:50%;left:50%;margin-top: -50px;margin-left -50px;width:100px;height:100px;
}

</style>

<div id="loader" class='res_center_css'></div>

    <div style='width:600px; height:600px;' id="map"></div>

    <script>




      var customLabel = {

        Vaccine: {
          label: 'P'
        }
       

      };
//center: new google.maps.LatLng(-33.863276, 151.207977),
//zoom: 12
 
/*
 var url_content1 = window.location.href;
var url_p1 = new URL(url_content1);
var identity = url_p1.searchParams.get("identity");
*/



        function initMap() {
//function {
$('.btn_action_map').click(function(){
//$(document).on( 'click', '.btn_action_map', function(){ 


var postid = $(this).data('id');
var title = $(this).data('title');
var identity = $(this).data('identity');
var lngx = $(this).data('lng');
var latx = $(this).data('lat');

/*
alert(postid);
alert(title);
alert(identity);
alert(lngx);
alert(latx);
*/

//center: new google.maps.LatLng(32.944012, -85.953850),

        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(latx, lngx),
          zoom: 11
        });
        var infoWindow = new google.maps.InfoWindow;

$('#loader').fadeIn(400).html('<br><div style="color:black;background:#c1c1c1;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i>  &nbsp;Please Wait, Google Map is being Loaded...</div>');

          //downloadUrl('map1_backend.php', function(data) {
			  downloadUrl('map_private_backend.php?identity='+identity, function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
 var photo = markerElem.getAttribute('photo');
var timing = markerElem.getAttribute('timing');
var title = markerElem.getAttribute('title');
var title_seo = markerElem.getAttribute('title_seo');
var desc = markerElem.getAttribute('content');
var data_type = markerElem.getAttribute('data_type');
var fullname = markerElem.getAttribute('fullname');
var userid = markerElem.getAttribute('userid');
var images = markerElem.getAttribute('images');
var comments = markerElem.getAttribute('comments');	
var ps = markerElem.getAttribute('help_category');
              var type = markerElem.getAttribute('type');
var post_photo = markerElem.getAttribute('p_photo');
var post_video = markerElem.getAttribute('p_video');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

$('#loader').hide();

              var infowincontent = document.createElement('div');
             var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};


var pic ='public.png';
var private ='private.png';


var pr = markerElem.getAttribute('post_status');
if(pr =='Seeking Help'){
var pp ='Seeking Help on ';
}

else{
var pp ='Requesting to Help Out on';
}


if(data_type=='photo'){

var rec = "<span>" +
"<img src='uploads/" + post_photo +"'  style='width:200px;max-width:200px;max-height:200px;height:200px;' class='pull-right img-rounded'>" +
 "</span>";
//$('.myimages').html(rec);

}

if(data_type=='video'){
var rec = "<span>" +
"<iframe class='responsive_video' style='width:300px;max-width:300px;max-height:300px;height:300px;' src='https://www.youtube.com/embed/" + post_video +"'></iframe>" +
 "</span>";
}

if(data_type=='post'){

var rec = "<span>" +
"<img src='uploads/" + images +"'  style='width:200px;max-width:200px;max-height:200px;height:200px;' class='pull-right img-rounded'>" +
 "</span>";

}

//if(data_type=='public'){
                var map_data = "<div style='background:#c1c1c1; border-bottom: 2px dashed purple;'>" +
"<div style='background:#824c4e;color:white;padding:10px;'>Users Map Location Center</div><br />" +
"<img src='uploads/" + photo +"' style='width:50px;max-width:50px;max-height:50px;height:50px;border-radius:50%'><br>" +
//"<img src='uploads/" + images +"' style='width:200px;max-width:200px;max-height:200px;height:200px;' class='pull-right img-rounded'><br>" +

"<div > " + rec +"</div><br>" +
//"<img src=" + photo +" style='width:50px;max-width:50px;max-height:50px;height:50px;border-radius:50%'><br>" +
"<span><b>Name:</b> " + fullname + "</span><br />" +
"<span><b>Title:</b> " + title + "</span><br />" +
"<span><b>Description:</b> " + desc + "</span><br />" +

"<span><b>Users Location Address: </b>" + address + "</span><br />" +
"<span style='color:green;font-size:16px;'><b>" + pp + ":</b> " + ps + "</span><br />" +
  "<span><b> <span class='fa fa-calendar'></span>Time:</b></span>" +
"<span data-livestamp='" + timing + "'></span></span><br /><br />"+

"<a title='Comments' href='reply.php?title=" + title_seo +"&post_id=" + id +"' style='background:#824c4e;color:white;padding:10px;border-radius:10%'>(" + comments + ")<i  style='color:white;font-size:30px;' class='fa fa-comments-o'></i> Comments</a><br>" +

                    "</div>";
//}



              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label,
 title : 'welcome'
              });
              marker.addListener('click', function() {
                //infoWindow.setContent(infowincontent);

//infoWindow.setContent('<b>'+name + "</b><br>" + address);

infoWindow.setContent(map_data);
                infoWindow.open(map, marker);
              });
            });
          });
		  
		   });  // close jquery clickbutton
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}

 $('#myModal_map').on('shown.bs.modal', function(){
    //init();
initMap();

    });



    </script>

  


<!-- end map loading-->





        </div>
        <div class="modal-footer" style="color:black;background:#c1c1c1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- map modal ends here -->


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_map_keys; ?>&callback=initMap">
    </script>





   
</body>
</html>



















