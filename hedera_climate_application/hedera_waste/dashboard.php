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



       
          <li class="navgate" style='cursor:pointer' title='Share Recycling Trash' data-toggle="modal" data-target="#myModal_Recycling">Share Recycling Trash</li>
        <li class="navgate" style='cursor:pointer' title='Share Composts Trash' data-toggle="modal" data-target="#myModal_Composting">Share Composts Trash</li>
       



             
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




<script>


// Recycling starts

$(document).ready(function(){
$('#recycle_btn').click(function () {

var email  = 'em';
var pickup_address = $('#pickup_address').val();
var fullname = 'fm';
var city = $('#city').val();
var info = $('#info').val();

var glass = $('#glass').val();
var paper_card = $('#paper_card').val();
var metals = $('#metals').val();
var plastic = $('#plastic').val();
var textiles = $('#textiles').val();
var weee_metals = $('#weee_metals').val();
var iba_metals = $('#iba_metals').val();
var other = $('#other').val();
var rewards = $('#rewards').val();


 if(fullname==""){
alert('please Enter Fullname');
}


 else if(email==""){
alert('please Enter Email');
}


else if(pickup_address==""){
alert('please Enter Pickup Address');
}

else if(city==''){
alert('please Pick Your City');
}

else if(rewards==''){
alert('Select How you want to be Rewarded');
}



else if(glass==''){
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

else if(info==''){
alert('Additional Info cannot be Empty. Just Type Anything');
}


else{


$("#loader-recycle").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="loader.gif">&nbsp;Please Wait, Your Trash is being Submited...</div>');
var datasend = {email:email, pickup_address:pickup_address, fullname:fullname, city:city, info:info, glass:glass, paper_card:paper_card, metals:metals, plastic:plastic, textiles:textiles, weee_metals:weee_metals, iba_metals:iba_metals, other:other, rewards:rewards};


	
		$.ajax({
			
			type:'POST',
			url:'recycle.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-recycle").hide();
$("#result-recycle").html(msg);
//setTimeout(function(){ $("#result-recycle").html(''); }, 5000);


// clear all Data
//$('#city').val('');		
//$('#pickup_address').val('');	


	
}
			
		});
		
		}

});

});

// Recycling ends







</script>




<!-- Recycling Modal start -->



<div id="myModal_Recycling" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style='background: #008080;color:white;padding:10px;'>
        <h4 class="modal-title">Share Waste Recycling Trash</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

Share Your Waste Recycling Trash and get rewarded with <b>Cryprto Currency.</b>
 
<br><br>
 <div class="form-group" style='display:none;'>
              <label> Fullname: </label>
              <input type="text" class="col-sm-12 form-control" id="fullnamex" name="fullnamex" placeholder="Fullname">
            </div>


 
 <div class="form-group" >
  <label>Your Name: </label>: <?php echo $fullname_sess; ?><br>

  <label>Your Contact Email: </label>: <?php echo $email_sess; ?><br>
</div>

 <div class="form-group" style='display:none;'>
              <label>Email: </label>
              <input type="text" class="col-sm-12 form-control" id="emailx" name="emailx" placeholder="Email" >
            </div>
 
 <div class="form-group">
              <label>Trash Pickup Address(In England): Eg. Abbey Gardens CT2 7EU, Canterbury</label>
              <input type="text" class="col-sm-12 form-control" id="pickup_address" name="pickup_address" placeholder="Trash Pickup Address" value="Abbey Gardens CT2 7EU, Canterbury">
            </div>

 <div class="form-group">
              <label>Select City(In England):: </label>
              <select class="col-sm-12 form-control" id="city" name="city">
<option value="">--Select--</option>


<option value="Bath">Bath</option>
<option value="Birmingham">Birmingham</option>
<option value="Bradford">Bradford</option>
<option value="Brighton & Hove">Brighton & Hove</option>
<option value="Bristol">Bristol</option>
<option value="Cambridge">Cambridge</option>

<option value="Canterbury">Canterbury</option>
<option value="Carlisle">Carlisle</option>
<option value="Chelmsford">Chelmsford</option>
<option value="Chester">Chester</option>
<option value="Chichester">Chichester</option>
<option value="Colchester">Colchester</option>

<option value="Coventry">Coventry</option>
<option value="Derby">Derby</option>
<option value="Doncaster">Doncaster</option>
<option value="Durham">Durham</option>
<option value="Ely">Ely</option>
<option value="Exeter">Exeter</option>

<option value="Gloucester">Gloucester</option>
<option value="Hereford">Hereford</option>
<option value="Kingston-upon-Hull">Kingston-upon-Hull</option>
<option value="Lancaster">Lancaster</option>
<option value="Leeds">Leeds</option>
<option value="Leicester">Leicester</option>

<option value="Lichfield">Lichfield</option>
<option value="Lincoln">Lincoln</option>
<option value="Liverpool">Liverpool</option>
<option value="London">London</option>
<option value="Manchester">Manchester</option>
<option value="Milton Keynes">Milton Keynes</option>

<option value="Newcastle-upon-Tyne">Newcastle-upon-Tyne</option>
<option value="Norwich">Norwich</option>
<option value="Nottingham">Nottingham</option>
<option value="Oxford">Oxford</option>
<option value="Peterborough">Peterborough</option>
<option value="Plymouth">Plymouth</option>


<option value="Portsmouth">Portsmouth</option>
<option value="Preston">Preston</option>
<option value="Ripon">Ripon</option>
<option value="Salford">Salford</option>
<option value="Salisbury">Salisbury</option>
<option value="Sheffield">Sheffield</option>
<option value="Southampton">Southampton</option>
<option value="Southend-on-Sea">Southend-on-Sea</option>
<option value="St Albans">St Albans</option>
<option value="Stoke on Trent">Stoke on Trent</option>
<option value="Sunderland">Sunderland</option>
<option value="Truro">Truro</option>
<option value="Wakefield">Wakefield</option>
<option value="Wells">Wells</option>
<option value="Westminster">Westminster</option>
<option value="Winchester">Winchester</option>
<option value="Wolverhampton">Wolverhampton</option>
<option value="Worcester">Worcester</option>
<option value="York">York</option>

 
</select>
            </div>



 <div class="form-group">
              <label>Rewards: </label>
              <select class="col-sm-12 form-control" id="rewards" name="rewards">

<option value="Hedera Crypto">Hedera Crypto</option>

 
</select>
            </div>
    
    
    <br><br>
    
    <div class='row' style='background:#ccc;'>
<label>Add Values to Trash to Share </label><br>

In <b>1998, According to US Waste Generation Statistics,</b> an average single person in the United States produced <b>4.46 pounds of waste per day,</b> which is measeaured
in <b>(lbs)</b>.
<br>


<br>
Add Values in (lbs) to the Recycle Material to be Shared. Add <b>0</b> if you don't have certain Trashed to be shared.<br><br>



 <div class="form-group col-sm-3">
              <label>Glass(lbs): </label>
              <input type="text" class="col-sm-12 form-control" id="glass" name="glass"  placeholder="glass" value="2.4">
            </div>
 <div class="form-group col-sm-3">
              <label>Paper and Card(lbs): </label>
              <input type="text" class="col-sm-12 form-control" id="paper_card" name="paper_card"   placeholder="Paper and Card" value="0">
            </div>
 <div class="form-group col-sm-3">
              <label>Metals(lbs): </label>
              <input type="text" class="col-sm-12 form-control" id="metals" name="metals"   placeholder="Metals">
            </div>

<div class="form-group col-sm-3">
              <label>Plastic(lbs): </label>
              <input type="text" class="col-sm-12 form-control" id="plastic" name="plastic"   placeholder="Plastic">
            </div>

</div>




    <div class='row' style='background:#ccc;'>

<div class="form-group col-sm-3">
              <label>Textiles(lbs): </label>
              <input type="text" class="col-sm-12 form-control" id="textiles" name="textiles"   placeholder="Textiles">
            </div>


<div class="form-group col-sm-3">
              <label>WEEE/Scrap Metal(lbs): </label>
              <input type="text" class="col-sm-12 form-control" id="weee_metals" name="weee_metals"   placeholder="WEEE and Scrap Metal">
            </div>



<div class="form-group col-sm-3">
              <label>IBA Metals(lbs): </label>
              <input type="text" class="col-sm-12 form-control" id="iba_metals" name="iba_metals"   placeholder="IBA Metals">
            </div>


<div class="form-group col-sm-3">
              <label>Other Materials(lbs): </label>
              <input type="text" class="col-sm-12 form-control" id="other" name="other"   placeholder="Other Materials">
            </div>
    
    
    </div>
    
 
    <div class="form-group col-sm-12">
              <label>Additional Info: (This can be Anything)</label>
              <input type="text" class="col-sm-12 form-control" id="info" name="info"   placeholder="Additional Info" value="Thanks">
            </div>
    
    
    
    
    
    

    
    
    





<br>
<div id="loader-recycle"></div>
<div id="result-recycle"></div>


                    <input type="button" id="recycle_btn" class="btn btn-primary" value="Submit Recycling Trash Now!" />



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<!-- Recycling Modal ends -->








<script>

// composting starts

$(document).ready(function(){
$('#composting_btn').click(function () {

var pickup_address = $('#pickup_addressa').val();
var city = $('#citya').val();
var info = $('#infoa').val();
var compost_material = $('#compost_material').val();
var compost_material_lbs = $('#compost_material_lbs').val();
var rewards = $('#rewardsx').val();


if(pickup_address==""){
alert('please Enter Pickup Address');
}

else if(city==''){
alert('please Pick Your City');
}


else if(rewards==''){
alert('Select How you want to be Rewarded');
}



else if(compost_material==''){
alert(' compost material Description cannot be empty. Enter Number Only');
}

else if( compost_material_lbs==''){
alert(' Compost_material Measurement values  cannot be empty. Enter Number Only');
}


else if(isNaN(compost_material_lbs)){
alert('Only Number is allowed for Compost_material Measurement values');
}



else if(info==''){
alert('Additional Info Cannot be Empty. Just Type Anything..');
}


else{


$("#loader-cx").fadeIn(400).html('<br><div style="color:white;background:#800000;padding:10px;"><img src="loader.gif">&nbsp;Please Wait, Your Trash is being Submited...</div>');
var datasend = {pickup_address:pickup_address,city:city, info:info, compost_material:compost_material, compost_material_lbs:compost_material_lbs, rewards:rewards};


	
		$.ajax({
			
			type:'POST',
			url:'composting.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-cx").hide();
$("#result-cx").html(msg);
//setTimeout(function(){ $("#result-cx").html(''); }, 5000);


// clear all Data
//$('#city').val('');		
//$('#pickup_address').val('');	


	
}
			
		});
		
		}

});

});

// compostin ends



</script>


<!-- Composting Modal start -->





<div id="myModal_Composting" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header"  style='background: #008080;color:white;padding:10px;'>
        <h4 class="modal-title">Share Compost Waste Trash</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

Share Your Compost Waste and get rewarded with <b>Hedera Cryprto Currency.</b>
 
<br><br>


 
 <div class="form-group" >
  <label>Your Name: </label>: <?php echo $fullname_sess; ?><br>

  <label>Your Contact Email: </label>: <?php echo $email_sess; ?><br>
</div>
 
 <div class="form-group">
              <label>Trash Pickup Address(In England): Eg. Abbey Gardens CT2 7EU, Canterbury</label>
              <input type="text" class="col-sm-12 form-control" id="pickup_addressa" name="pickup_addressa" placeholder="Trash Pickup Address">
            </div>

 <div class="form-group">
              <label>Select City(In England):: </label>
              <select class="col-sm-12 form-control" id="citya" name="citya">
<option value="">--Select--</option>


<option value="Bath">Bath</option>
<option value="Birmingham">Birmingham</option>
<option value="Bradford">Bradford</option>
<option value="Brighton & Hove">Brighton & Hove</option>
<option value="Bristol">Bristol</option>
<option value="Cambridge">Cambridge</option>

<option value="Canterbury">Canterbury</option>
<option value="Carlisle">Carlisle</option>
<option value="Chelmsford">Chelmsford</option>
<option value="Chester">Chester</option>
<option value="Chichester">Chichester</option>
<option value="Colchester">Colchester</option>

<option value="Coventry">Coventry</option>
<option value="Derby">Derby</option>
<option value="Doncaster">Doncaster</option>
<option value="Durham">Durham</option>
<option value="Ely">Ely</option>
<option value="Exeter">Exeter</option>

<option value="Gloucester">Gloucester</option>
<option value="Hereford">Hereford</option>
<option value="Kingston-upon-Hull">Kingston-upon-Hull</option>
<option value="Lancaster">Lancaster</option>
<option value="Leeds">Leeds</option>
<option value="Leicester">Leicester</option>

<option value="Lichfield">Lichfield</option>
<option value="Lincoln">Lincoln</option>
<option value="Liverpool">Liverpool</option>
<option value="London">London</option>
<option value="Manchester">Manchester</option>
<option value="Milton Keynes">Milton Keynes</option>

<option value="Newcastle-upon-Tyne">Newcastle-upon-Tyne</option>
<option value="Norwich">Norwich</option>
<option value="Nottingham">Nottingham</option>
<option value="Oxford">Oxford</option>
<option value="Peterborough">Peterborough</option>
<option value="Plymouth">Plymouth</option>


<option value="Portsmouth">Portsmouth</option>
<option value="Preston">Preston</option>
<option value="Ripon">Ripon</option>
<option value="Salford">Salford</option>
<option value="Salisbury">Salisbury</option>
<option value="Sheffield">Sheffield</option>
<option value="Southampton">Southampton</option>
<option value="Southend-on-Sea">Southend-on-Sea</option>
<option value="St Albans">St Albans</option>
<option value="Stoke on Trent">Stoke on Trent</option>
<option value="Sunderland">Sunderland</option>
<option value="Truro">Truro</option>
<option value="Wakefield">Wakefield</option>
<option value="Wells">Wells</option>
<option value="Westminster">Westminster</option>
<option value="Winchester">Winchester</option>
<option value="Wolverhampton">Wolverhampton</option>
<option value="Worcester">Worcester</option>
<option value="York">York</option>

 
</select>
            </div>


 <div class="form-group" >
              <label>Select Rewards: </label>
              <select class="col-sm-12 form-control" id="rewardsx" name="rewardsx">


<option value="Hedera Crypto">Hedera Crypto</option>

 
</select>
            </div>
    
    
    <br><br>
    
    <div class='row' style='background:#ccc;'>
<label>Add Values to Compost Waste to Share </label><br>

In <b>1998, According to US Waste Generation Statistics,</b> an average single person in the United States produced <b>4.46 pounds of waste per day,</b> which is measeaured
in <b>(lbs)</b>.
<br>


<br>
Add Values in (lbs) to the Compost Waste Material to be Shared.<br><br>
<b>Example of Compostable Food Waste:</b> potato peelings, apple cores, coconut husks, orange peel, cauliflower leaves,Egg Shell etc.<br>
<b>Example of Compostable Garden Waste:</b> branches, twigs, dead flower heads, grass cuttings, fallen leaves, fruit dropped from trees, animal or chicken droppings etc.<br>

<br>
 <div class="form-group col-sm-12">
              <label>Composts Material Details(Comma Seperated list of Compost Material): </label>
              <textarea class="col-sm-12 form-control" id="compost_material" name="compost_material" placeholder="Eg. coconut husks, orange peel, fallen leaves"></textarea>
            </div>

 <div class="form-group col-sm-12">
              <label>Composts Material Measurement(lbs): <span style='color:red;'>Eg. 7.6 lbs</span></label>
              <input type="text" class="col-sm-12 form-control" id="compost_material_lbs" name="compost_material_lbs"  placeholder="Composts Material Measurement(lbs)" >
            </div>


    <div class="form-group col-sm-12">
              <label>Additional Info: (This can be Anything)</label>
              <input type="text" class="col-sm-12 form-control" id="infoa" name="infoa"   placeholder="Additional Info" value="Thanks">
            </div>

</div>





 
    



<br>
<div id="loader-cx"></div>
<div id="result-cx"></div>


                    <input type="button" id="composting_btn" class="btn btn-primary" value="Submit Composts Trash Now!" />



      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<!-- Composting Modal ends -->






<div class='row'>
<br><br><br>



<center><h3>Welcome!
<b style='color:purple'> <?php echo $fullname_sess; ?> (<?php echo $status_sess; ?>)</b></h3></center><br>

<div class='col-sm-12 xcx'>
Share Contribution Profile Links: <a target='_blank' href='profile.php?userid=<?php echo $userid_sess; ?>' title='Share Contribution Profile Links' class='''>
<?php echo $site_url; ?>/profile.php?userid=<?php echo $userid_sess; ?></a> 
</div>


<!--Start Left-->
<div class='col-sm-3'>

<h2>Waste  Managements Categories</h2>





<li class='seeking_css'><a style='color:white;' href="dashboard_recycling.php">Manage New Waste Recycling Trash</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_composting.php">Manage New Waste Composts Trash</a></li>
<br>



</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-9'>






<!-- Main Post Database query starts here -->









<style>
.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }


</style>



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


According to US Statistics, In 1998 the average person in the United States produced <b>4.46 pounds of waste per day.</b> And that is <b>4.46 lbs / person / day </b>

<br>In this app Admin rewards every <b>1 lbs</b> of recycled or compost waste with <b>100</b> hbar of crypto.<br><br>

Eg. <br>

1lbs  of Recycle Waste = 100 hbar<br>
2lbs  of Recycle Waste = 200 hbar<br>
   




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
background: #008080;
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


.seeking_css2{
background: #800000;
color:white;
padding:6px;
cursor:pointer;
border:none;
border-radius:10%;
font-size:16px;
}

.seeking_css2:hover{
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



</body>
</html>



















