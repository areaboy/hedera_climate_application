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

?>


<!DOCTYPE html>
<html lang="en">

<head>
 <title><?php include('header_title.php'); echo $header_tit; ?> - Welcome <?php echo $fullname_sess; ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>
<script src="jquery.dataTables.min.js"></script>
  <script src="dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="dataTables.bootstrap.min.css" />

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
background-color: #008080;
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
background-color: #008080;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: #008080;
padding: 6px;
color:white;
}


/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:fuchsia;
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






.category_post1{
background-color: #008080;
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


.modal-dialog{
   
   margin-top: 110px;
} 





.xcx{
background-color: #ddd;
padding: 6px;
color:black;
font-size:14px;
border-radius: 10%;
border: none;
cursor: pointer;
text-align: center;

}
.xcx:hover {
background: orange;
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





 <li class="navgate_no"><a title='Dashboard' href="dashboard.php" style="color:white;font-size:14px;">
<button class="category_post1">Back to Dashboard</button></a></li>





             

<li class="navgate"><img style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" src="uploads/<?php echo $photo_sess; ?>" width="80px" height="80px">

<span class="dropdown">
  <a href="profile_base.php" style="color:white;font-size:14px;cursor:pointer;" title='View Profile' class="btn1 btn-default1 ">
<?php echo $fullname_sess; ?></a>
</span>

</li>


 <li class="navgate_no"><a href="profile_base.php" title='View Profile'  style="color:white;font-size:14px;">
<button class="category_post1">Profile</button></a></li>

 <li class="navgate_no"><a href="logout.php" title='Logout'  style="color:white;font-size:14px;">
<button class="category_post1">Logout</button></a></li>


      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->



















<div class='rowx'>
<br><br><br>



<center><h3>Welcome!
<b style='color:purple'> <?php echo $fullname_sess; ?> (<?php echo $status_sess; ?>) to Recycling Dashboard</b></h3></center><br>

<!--Start Left-->
<div class='col-sm-0'>

</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-12x'>


<script>



// signup starts

$(document).ready(function(){
$('#balance_btn').click(function () {

var token_id  = '<?php echo $crypto_sess; ?>';


 if(token_id==""){
alert('Hedera Account/Token Id is Empty');
}


else{


$("#loader-balance").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="loader.gif">&nbsp;Please Wait, Hedera Balance is being Retrieved...</div>');
var datasend = {token_id:token_id};


	
		$.ajax({
			
			type:'POST',
                        dataType: 'json',
			url:'<?php echo $nodejs_url; ?>/users/balance',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-balance").hide();
$("#result-balance").html(msg);
//setTimeout(function(){ $("#result-balance").html(''); }, 5000);
//alert(msg.result);
if(msg.result == 'success'){
alert('Hedera Account Balance Info Sucessfully Retrieved..');



var accountid = msg.accountid;
var message = msg.message;
var cost = msg.cost;

   var res = "<div style='background:#c1c1c1; border-bottom: 2px dashed purple;'>" +
"<div style='background:#008080;color:white;padding:10px;'>Users Hedera Account Details</div><br />" +
"<span><b>Account ID:</b> " + accountid + "</span><br />" +
"<span><b>Balance Info: </b>" + message + "</span><br />" +
"<span><b>Transaction Cost: </b>" + cost + "</span><br />" +


                    "</div>";
$("#result-bal").html(res);

}


// clear
//$('#em').val('');		


	
}
			
		});
		
		}

});

});


</script>


        <div class="content">

      <h4 style='color:#008080'> Your Hedera Account/Token Id:     <?php echo $crypto_sess; ?></h4>


<div id="loader-balance"></div>
<div id="result-balance"></div>
<div id="result-bal"></div>
          <button type="button" id="balance_btn" class="btn btn-primary">Check Your Hedera Account Balance</button><br><br>







<?php
include('data6rst.php');

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


$res->execute();
$row = $res->fetch(PDO::FETCH_ASSOC);
$glass = $row['value_glass'];
$paper_card = $row['value_paper_card'];
$metals = $row['value_metals'];
$plastic = $row['value_plastic'];
$textiles = $row['value_textiles'];
$weee_metals = $row['value_weee_metals'];
$iba_metals = $row['value_iba_metals'];
$other = $row['value_other'];




/*
$res = $db->prepare('SELECT * FROM users_recycling');
$res->execute(array());
$row = $res->fetch(PDO::FETCH_ASSOC);
$glass = $row['glass'];
$paper_card = $row['paper_card'];
$metals = $row['metals'];
$plastic = $row['plastic'];
$textiles = $row['textiles'];
$weee_metals = $row['weee_metals'];
$iba_metals = $row['iba_metals'];
$other = $row['other'];
$total_rewards = $row['total_rewards'];
*/


?>



<div class='row'>

<div class='col-sm-3 xcx'>
<b style='font-size:20px'>
(<?php echo $glass; ?>) </b><br>
Total Glass(lbs)

</div>

<div class='col-sm-3 xcx'>
<b style='font-size:20px'>
(<?php echo $paper_card ?>) </b><br>
Total Paper & Card(lbs)

</div>

<div class='col-sm-3 xcx'>
<b style='font-size:20px'>
(<?php echo $metals; ?>) </b><br>
Total Metals(lbs)

</div>

<div class='col-sm-3 xcx'>
<b style='font-size:20px'>
(<?php echo $plastic; ?>) </b><br>
Total Plastics(lbs)
</div>

</div><p></p>

<div class='row'>

<div class='col-sm-3 xcx'>
<b style='font-size:20px'>
<?php echo $textiles; ?></b><br>
Textiles(lbs)

</div>

<div class='col-sm-3 xcx'>
<b style='font-size:20px'>
(<?php echo $weee_metals; ?>) </b><br>
WEEE Metals & Other Scrap Metals(lbs)
</div>

<div class='col-sm-3 xcx'>
<b style='font-size:20px'>
(<?php echo $iba_metals; ?>) </b><br>
IBA Metals(lbs)
</div>

<div class='col-sm-3 xcx'>
<b style='font-size:20px'>
(<?php echo $other; ?>) </b><br>
Other Materials(lbs)
</div>


</div><br>

<style>

.status_css{
color:red;
fontsize:16px;
}

.status_css2{
color:green;
fontsize:16px;
}

.status_css3{
color:#800000;
fontsize:16px;
}
</style>



<h4>Search Data by <span style='color:fuchsia'> Name, Email, Month Eg. (apr), Year Eg(2023)</span> etc...</h4><br>


<div class="container">
<div class="row">
<div class="col-sm-12 table-responsive">
<div class="alert_server_response"></div>
<div class="loader_x"></div>
<table id="backup_content" class="table table-bordered table-striped">
<thead><tr>



<th>FullName</th>
<th>Glass (lbs)</th>
<th>Paper & Card (lbs)</th>
<th>Metals (lbs)</th>
<th>Plastic (lbs)</th>
<th>Textiles (lbs)</th>
<th>WEEE & Scrap Metals (lbs)</th>
<th>IBA Metals (lbs)</th>
<th>Rewards</th>
<th>Time</th>
<th>User Profile</th>
<th>Status</th>
<th>Action</th>
</tr></thead>
</table>
</div>
</div>
</div>






<span class="loader_res"></span>



<script>
$(document).ready(function(){

var get_content = 'get_data';
if(get_content==""){
alert('There is an Issue with Cotent Database Retrieval');
}
else{
$('.loader_res').fadeIn(400).html('<br><div style="background:#eee; width:100%;height:30%;text-align:center"><img src="ajax-loader.gif">&nbsp;Please Wait, Your Data is being Loaded</div>');
		
 var data_initialize = $('#backup_content').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"dashboard_recycling_action.php",
   type:"POST",
   data:{get_content:get_content}
  },
  "columnDefs":[
   {
    "orderable":false,
   },
  ],
  "pageLength": 10
 });

if(data_initialize !=''){
$('.loader_res').hide();
}

}

 

//$('#contentModal').modal('hide');
//data_initialize.ajax.reload();

 
});


</script>


<script>
$(document).ready(function(){
//$('.btn_call').click(function(){
$(document).on( 'click', '.btn_call', function(){ 





var id = $(this).data('id');
var email = $(this).data('email');
var fullname = $(this).data('fullname');
var phone_no  = $(this).data('phone_no');
var booking_id = $(this).data('booking_id');
var booking_version = $(this).data('booking_version');


$('.p_id').html(id);
$('.p_email').html(email);
$('.p_fullname').html(fullname);
$('.p_identity_value').val(id).value;
$('.p_email_value').val(email).value;
$('.p_fullname_value').val(fullname).value;
$('.p_phone_no_value').val(phone_no).value;
$('.p_phone_no').html(phone_no);

$('.p_booking_id_value').val(booking_id).value;
$('.p_booking_version_value').val(booking_version).value;

});

});




$(document).ready(function(){
//$('.btn_call').click(function(){
$(document).on( 'click', '.btn_call', function(){ 

var id = $(this).data('id');
var email = $(this).data('email');
var fullname = $(this).data('fullname');
var userid  = $(this).data('userid');


$('.p_id1').html(id);
$('#p_id1').html(id);
$('.p_email1').html(email);
$('.p_fullname1').html(fullname);
$('.p_userid1').html(userid);


$('.v_id1').val(id).value;
$('.v_email1').val(email).value;
$('.v_fullname1').val(fullname).value;
$('.v_userid1').val(userid).value;

});

});





// clear Modal div content on modal closef closed
$(document).ready(function(){

$("#myModal_carto").on("hidden.bs.modal", function(){
    //$(".modal-body").html("");
 $('.mydata_empty').empty(); 
$('#qty').val(''); 
});



});


</script>




<script>
$(document).ready(function(){
//$('.btn_action').click(function(){
$(document).on( 'click', '.btn_action', function(){ 

var id = $(this).data('id');
var email = $(this).data('email');
var fullname = $(this).data('fullname');
var userid  = $(this).data('userid');
var pickup_address = $(this).data('pickup_address');
var city = $(this).data('city');
var info = $(this).data('info');
var glass = $(this).data('glass');
var paper_card = $(this).data('paper_card');
var metals = $(this).data('metals');
var plastic = $(this).data('plastic');
var textiles = $(this).data('textiles');
var weee_metals = $(this).data('weee_metals');
var iba_metals = $(this).data('iba_metals');
var other = $(this).data('other');
var timing1 = $(this).data('timing1');
var timing2 = $(this).data('timing2');
var status = $(this).data('status');
var lat = $(this).data('lat');
var lng = $(this).data('lng');

var rewards = $(this).data('rewards');
var month = $(this).data('month');
var year = $(this).data('year');


$('.p_id').html(id);
$('#p_id').html(id);
$('.p_email').html(email);
$('.p_fullname').html(fullname);
$('.p_userid').html(userid);
$('.p_pickup_address').html(pickup_address);
$('.p_city').html(city);
$('.p_info').html(info);
$('.p_glass').html(glass);
$('.p_paper_card').html(paper_card);
$('.p_metals').html(metals);
$('.p_plastic').html(plastic);
$('.p_textiles').html(textiles);
$('.p_weee_metals').html(weee_metals);
$('.p_iba_metals').html(iba_metals);
$('.p_other').html(other);
$('.p_timing1').html(timing1);
$('.p_timing2').html(timing2);
$('.p_status').html(status);
$('.p_lat').html(lat);
$('.p_lng').html(lng);
$('.p_rewards').html(rewards);
$('.p_month').html(month);
$('.p_year').html(year);


$('.v_id').val(id).value;
$('.v_email').val(email).value;
$('.v_fullname').val(fullname).value;
$('.v_userid').val(userid).value;
$('.v_pickup_address').val(pickup_address).value;
$('.v_city').val(city).value;
$('.v_info').val(info).value;
$('.v_glass').val(glass).value;
$('.v_paper_card').val(paper_card).value;
$('.v_metals').val(metals).value;
$('.v_plastic').val(plastic).value;
$('.v_textiles').val(textiles).value;
$('.v_weee_metals').val(weee_metals).value;
$('.v_iba_metals').val(iba_metals).value;
$('.v_other').val(other).value;
$('.v_timing1').val(timing1).value;
$('.v_timing2').val(timing2).value;
$('.v_status').val(status).value;
$('.v_lat').val(lat).value;
$('.v_lng').val(lng).value;




});

});




// clear Modal div content on modal closef closed
$(document).ready(function(){

$("#myModal_sales").on("hidden.bs.modal", function(){
    //$(".modal-body").html("");
 $('.mydata_emptyx').empty(); 
});

});











   $(document).ready(function(){
//$(".reloadData").click(function(){
$(document).on( 'click', '.reloadData', function(){ 

location.reload();

});

});








// delete
$(document).ready(function(){

//$('.delete_btn').click(function(){
$(document).on( 'click', '.delete_btn', function(){ 

// confirm start
if(confirm("Are you sure you want to Delete this Data ")){
var id = $(this).data('id');
var userid = $(this).data('userid');

$(".dloader-updates_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Data is being Deleted...</div>');
var datasend = {id:id,userid:userid};
		$.ajax({
			
			type:'POST',
			url:'recycle_delete.php',
			data:datasend,
                         dataType: 'html',
                        crossDomain: true,
			cache:false,
			success:function(msg){
$(".dloader-updates_"+id).hide();
$(".dresult-updates_"+id).html(msg);
//location.reload();

}
			
});
}

// confirm ends

                });


            });

			



// Mark Trash as Collected
$(document).ready(function(){

//$('.approve_btn').click(function(){
$(document).on( 'click', '.approve_btn', function(){ 

// confirm start
if(confirm("Are you sure you want to Mark this Trash as Collected, Make Payments to Hedera Recievers Accounts and then Award (10) Points per (1 lbs of Trash) to this User.")){
var id = $(this).data('id');
var userid = $(this).data('userid');
var fullname = $(this).data('fullname');
var email = $(this).data('email');
var reciever_account = $(this).data('reciever_account');
var reciever_amount = $(this).data('reciever_amount');

//url:'recycle_approve.php',
$(".approveloader-updates_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Data is being Processed...</div>');
var datasend = {id:id,userid:userid,fullname:fullname, email:email, reciever_account:reciever_account,reciever_amount:reciever_amount };
		$.ajax({
			
			type:'POST',
                        dataType: 'json',
			url:'<?php echo $nodejs_url; ?>/users/payments',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){
//alert(msg);

//alert(msg.result);
if(msg.result == 'success'){

alert(msg.message);
$(".approveloader-updates_"+id).hide();
$(".approveresult-updates_"+id).html(msg);
location.reload();


}



}
			
});
}

// confirm ends

                });


            });



</script>







<script>



$(document).ready(function(){

//$('.recycle_edit_btn').click(function(){
$(document).on( 'click', '.recycle_edit_btn', function(){ 

var glass = $('#v_glass').val();
var paper_card = $('#v_paper_card').val();
var metals = $('#v_metals').val();
var plastic = $('#v_plastic').val();
var textiles = $('#v_textiles').val();
var weee_metals = $('#v_weee_metals').val();
var iba_metals = $('#v_iba_metals').val();
var other = $('#v_other').val();

var id = $('.v_id').val();
//alert(' id:' +id);



if(id==''){
alert('ID cannot be empty');
}


if(glass==''){
alert(' glass cannot be empty. Enter Number Only');
}

else if(paper_card==''){
alert('Paper and Card  cannot be empty. Enter Number Only');
}

else if(metals==''){
alert('Metals cannot be empty. Enter Number Only');
}

else if(plastic==''){
alert('Plastic cannot be empty. Enter Number Only');
}


else if(textiles==''){
alert('Textiles cannot be empty. Enter Number Only');
}

else if(weee_metals==''){
alert('WEEE & Other Scrap Metals cannot be empty. Enter Number Only');
}

else if(iba_metals==''){
alert('IBA Metals cannot be empty. Enter Number Only');
}

else if(other==''){
alert('Other Materials cannot be empty. Enter Number Only');
}




else if(isNaN(glass)){
alert('Only Number is allowed for glass');
}

else if(isNaN(paper_card)){
alert('Only Number is allowed for Paper and Card');
}

else if(isNaN(metals)){
alert('Only Number is allowed for Metals');
}

else if(isNaN(plastic)){
alert('Only Number is allowed for Plastic');
}


else if(isNaN(textiles)){
alert('Only Number is allowed for Textiles');
}

else if(isNaN(weee_metals)){
alert('Only Number is allowed for WEE & Other Scrap Metals');
}

else if(isNaN(iba_metals)){
alert('Only Number is allowed for IBA Metals');
}

else if(isNaN(other)){
alert('Only Number is allowed for Other Materials');
}

else{

$("#loader_re").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Data is being Updated...</div>');
var datasend = {id:id, glass:glass, paper_card:paper_card, metals:metals, plastic:plastic, textiles:textiles, weee_metals:weee_metals, iba_metals:iba_metals, other:other};
		$.ajax({
			
			type:'POST',
			url:'recycle_edit.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

//alert(msg);
$("#loader_re").hide();
$("#result_re").html(msg);

}
			
});
}


                });


            });


</script>


 <!--Edit Modal ends -->
  <div class="modal fade" id="myModal_edit" role="dialog">
    <div class="modal-dialog full-screen-modal">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Users Data </h4>
        </div>
        <div class="modal-body">
<div class='row'>

<div class='well col-sm-6'>
<h3>User Details</h3>
<b>Full Name: </b><span class='p_fullname'></span><br>
<b>Email: </b><span class='p_email'></span><br>
<b>Pickup Address: </b><span class='p_pickup_address'></span><br>
<b>City: </b><span class='p_city'></span><br>
<b>Status: </b><span class='p_status'></span><br>
<b>Rewards: </b><span class='p_rewards'></span><br>
<b>Month: </b><span class='p_month'></span><br>
<b>Year: </b><span class='p_year'></span><br>
<b>Time & Date: </b><span class='p_timing1'></span>, <span class='p_timing2'></span>)<br>

</div>


<div class='well col-sm-6'>

<h3>Recycling Details</h3>
<b>Glass: </b><span class='p_glass'></span>(lbs)<br>
<b>Paper & Card: </b><span class='p_paper_card'></span>(lbs)<br>
<b>Metal: </b><span class='p_metals'></span>(lbs)<br>
<b>Plastic: </b><span class='p_plastic'></span>(lbs)<br>
<b>Textiles: </b><span class='p_textiles'></span>(lbs)<br>
<b>WEEE & Other Scrap Metals: </b><span class='p_weee_metals'></span>(lbs)<br>
<b>IBA Metals: </b><span class='p_iba_metals'></span>(lbs)<br>
<b>Other Materials: </b><span class='p_other'></span>(lbs)<br>


</div>

</div>



<style>
.time_css{
background:#ccc;padding:6px;border-radius:20%;
}

.time_css:hover{
background:orange;color:black;
}



</style>

<br>

<div class="v_id" value=""></div>

<h3> Edit Recycle Data</h3>
 <div class="form-group">
              <label>Glass(lbs): </label>
              <input type="text" class="col-sm-12 form-control v_glass" id="v_glass" name=""  value="">
            </div>
 
<br>
 <div class="form-group">
              <label>Paper & Card(lbs): </label>
              <input type="text" class="col-sm-12 form-control v_paper_card" id="v_paper_card" name=""  value="">
            </div>
 
<br>
 <div class="form-group">
              <label>Metals(lbs): </label>
              <input type="text" class="col-sm-12 form-control v_metals" id="v_metals" name=""  value="">
            </div>
 
<br>
 <div class="form-group">
              <label>Plastic(lbs): </label>
              <input type="text" class="col-sm-12 form-control v_plastic" id="v_plastic" name=""  value="">
            </div>
 
<br>
 <div class="form-group">
              <label>Textiles(lbs): </label>
              <input type="text" class="col-sm-12 form-control v_textiles" id="v_textiles" name=""  value="">
            </div>
 
<br>
 <div class="form-group">
              <label>WEEE & Other Scrap Materials(lbs): </label>
              <input type="text" class="col-sm-12 form-control v_weee_metals" id="v_weee_metals" name=""  value="">
            </div>
 
<br>
 <div class="form-group">
              <label>IBA Metals(lbs): </label>
              <input type="text" class="col-sm-12 form-control v_iba_metals" id="v_iba_metals" name=""  value="">
            </div>
 
<br>
 <div class="form-group">
              <label>Others(lbs): </label>
              <input type="text" class="col-sm-12 form-control v_other" id="v_other" name=""  value="">
            </div>
 
<br>
<br>
<input type="button" id="recycle_edit_btn" data-v_id='v_id' class="btn btn-primary recycle_edit_btn" value="Edit Now!" />



<div id='loader_re'></div>
<div id='result_re'></div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 <!--Edit Modal ends -->




<script>

$(document).ready(function(){
$('#email_users_btn').click(function(){

var email_title = $('#email_title').val();		
var email_message = $('#email_message').val();
var email = $('.v_email1').val();
var fullname = $('.v_fullname1').val();
var userid = $('.v_userid1').val();
var id = $('.v_id1').val();

/*
if(isNaN(discount)){
return false;
}
*/

if(id==""){
alert('ID Cannot be Empty');
}



else if(email_title==""){
alert('Email  Title cannot be Empty.');
$('.email_message_alert').html("<div class='alert alert-warning' style='color:red;'>Email Title Cannot be Empty.</div>");


}


else if(email_message==""){
alert('Email Message cannot be Empty.');
$('.email_message_alert').html("<div class='alert alert-warning' style='color:red;'>Email Message Cannot be Empty.</div>");


}


else{


$('#loader_recxx').fadeIn(400).html('<br><div style="color:black;background:#ddd;padding:10px;"><img src="loader.gif" style="font-size:20px"> &nbsp;Please Wait, Email is being sent in Progress.</div>');
var datasend = {email_title:email_title, email_message:email_message,email:email,fullname:fullname,userid:userid,id:id};


$.ajax({
			
			type:'POST',
			url:'email_users.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


                        $('#loader_recxx').hide();
				//$('#result_recxx').fadeIn('slow').prepend(msg);
$('#result_recxx').html(msg);
$('#alertdata_recxx').delay(7000).fadeOut('slow');
$('#alertdata_recxx').delay(7000).fadeOut('slow');


$('#email_title').val('');
$('#email_message').val('');
			
			}
			
		});
		
		}
		
	})
					
});




</script>





 <!-- email Modal -->
  <div class="modal fade" id="myModal_email" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Contact User Via Email</h4>
        </div>
        <div class="modal-body">



<script>



</script>


<div class="v_id1" value=""></div>
<div class="v_fullname1" value=""></div>
<div class="v_email1" value=""></div>
<div class="v_userid1" value=""></div>

<div class='row'>
<div class='col-sm-12' style='background:#ddd;'>

<h4>Users Info</h4>


<b>Name: </b><span class='p_fullname'></span><br>
<b>Email: </b><span class='p_email'></span><br>


               </div>


</div>


<br>

<h5> Send Email to User</h5><br>



 <div class="form-group">
           <b>Email Title</b>
              <input type='text' class="col-sm-12 form-control email_title" id="email_title" name="email_title" value="">

            </div>



 <div class="form-group">
           <b>Message</b>
              <textarea class="col-sm-12 form-control" id="email_message" name="email_message" ></textarea>

            </div>

<div class='email_message_alert mydata_empty'></div>


<div class="form-group">
<div id="loader_recxx" ></div>

<div id="result_recxx" class='mydata_empty'></div>
<br />

<button type="button" id="email_users_btn" class="btn btn-primary" title='Email User'>Email User</button>
</div>


     </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



<!-- The Modal contact/email users Ends -->








<script>


$(document).ready(function(){
//$('.btn_action_map_direction').click(function(){
$(document).on( 'click', '.btn_action_map', function(){ 

var id = $(this).data('id');
var pickup_address = $(this).data('pickup_address');
var lat = $(this).data('lat');
var lng = $(this).data('lng');
var userid = $(this).data('userid');
var fullname = $(this).data('fullname');



$('.map_id').html(id);
$('.map_userid').html(userid);
$('.map_pickup_address').html(pickup_address);
$('.map_lng').html(lng);
$('.map_lat').html(lat);
$('.map_fullname').html(fullname);


$('.mapv_id').val(id).value;
$('.mapv_userid').val(userid).value;
$('.mapv_pickup_address').val(pickup_address).value;
$('.mapv_lat').val(lat).value;
$('.mapv_lng').val(lng).value;


});

});



$(document).ready(function(){
$('#map_direction_btn').click(function(){

var start_address = $('#start_address').val();		
var end_address = $('.mapv_pickup_address').val();
var id = $('.mapv_id').val();

/*
if(isNaN(discount)){
return false;
}
*/

if(id==""){
alert('ID Cannot be Empty');
return false;
}


if(start_address==""){
alert('Your Start/Position  Address Cannot be Empty');
return false;
}


$('#result_map_d').html("<br><a target='_blank' title='Goto Google Maps' href='reycling_users_map_direction.php?start_address=" + start_address +"&end_address=" + end_address +"' style='background:#008080;color:white;padding:10px;border-radius:10%'> Click to Continue to Google Map Direction</a><br>");


	})
					
});




</script>





 <!-- Modal Map Direction starts -->
  <div class="modal fade" id="myModal_map_direction" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Get Users Trash Location Address on Map</h4>
        </div>
        <div class="modal-body">




<div class="mapv_id" value=""></div>
<div class="mapv_lat" value=""></div>
<div class="mapv_lng" value=""></div>
<div class="mapv_userid" value=""></div>
<div class="mapv_pickup_address" value=""></div>

<div class='row'>
<div class='col-sm-12' style='background:#ddd;'>

<h4>Users Info</h4>
<b>Name: </b><span class='map_fullname'></span><br>


               </div>


</div>
<br>
 <div class="form-group">
           <b>Enter Your Start/Position Address(In England) Eg: </b>  HAWTHORN WAY, Cambridge, England.<br>
              <input type='text' class="col-sm-12 form-control start_address" id="start_address" name="start_address" value="">

            </div>

<br>
<div class="form-group">

<div id="result_map_d" class='mydata_empty'></div>
<br />

<button type="button" id="map_direction_btn" class="btn btn-primary">Get Map Direction</button>
</div>


     </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>



<!-- The Modal Map Direction Ends -->





</div>
<!--End Right-->

</div>
<!--Row-->







<!--chart START-->



<style>
/*
body {
    width: 660px;
    margin: 0 auto;
}
*/
</style>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script type="text/javascript">  

google.charts.load('current', {'packages':['corechart']});

google.charts.setOnLoadCallback(column_chart);
//google.charts.setOnLoadCallback(line_chart);
function column_chart() {

$('#loader1').fadeIn(400).html('<div style="background:#ddd;color:black;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp; &nbsp;Please Wait, Statistics is being Loaded.</div>');

var res = $.ajax({
url: 'chart.php',
dataType:"json",
async: false,
success: function(res)
{

  var options = {'title':'Waste Recycling', 'width':800, 'height':400,
 series: {
            0: { color: 'purple' },
            1: { color: 'navy' },
          
          }
};


var data = new google.visualization.arrayToDataTable(res);
var chart = new google.visualization.ColumnChart(document.getElementById('columnchart_data'));
chart.draw(data, options);
$('#loader1').hide();

}
}).responseText;
}



google.charts.setOnLoadCallback(line_chart);
function line_chart() {


$('#loader2').fadeIn(400).html('<div style="background:#ddd;color:black;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp; &nbsp;Please Wait, Statistics is being Loaded</div>');

var res1 = $.ajax({
url: 'chart.php',
dataType:"json",
async: false,
success: function(res1)
{

  var options = {'title':'Waste Recycling Over Time', 'width':800, 'height':400,
 series: {
            0: { color: '#800000' },
            1: { color: 'orange' },
          
          }
};


var data = new google.visualization.arrayToDataTable(res1);
var chart = new google.visualization.BarChart(document.getElementById('areachart_data'));
chart.draw(data, options);
$('#loader2').hide();

}
}).responseText;
}





google.charts.setOnLoadCallback(pie_chart);
function pie_chart() {


$('#loader3').fadeIn(400).html('<div style="background:#ddd;color:black;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp; &nbsp;Please Wait, Statistics is being Loaded</div>');

var res2 = $.ajax({
url: 'chart.php',
dataType:"json",
async: false,
success: function(res2)
{

  var options = {'title':'Waste Recycling Over Time', 'width':800, 'height':400,
 series: {
            0: { color: '#800000' },
            1: { color: 'orange' },
          
          }
};


var data = new google.visualization.arrayToDataTable(res2);
var chart = new google.visualization.PieChart(document.getElementById('piechart_data'));
chart.draw(data, options);
$('#loader3').hide();

}
}).responseText;
}






</script>

<br><br>
<h3><center>Waste Recycling Statistics Over Time</center></h3>
<div id="loader1"></div>
    <div id="areachart_data"></div>

<div id="loader2"></div>
    <div id="columnchart_data"></div>



<div id="loader3"></div>
    <div id="piechart_data"></div>



    </div>



<div id="loader" class='res_center_css'></div>



<!--chart ends-->













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




   
</body>
</html>


