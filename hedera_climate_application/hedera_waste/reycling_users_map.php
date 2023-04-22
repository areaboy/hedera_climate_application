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

?>




<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title></title>
    <style>
    
      #map {
        height: 80%;
      }
    
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>



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
			
</style>

<html>
  <body>

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








 <li class="navgate_no"><a title='posters Map Search' href="dashboard.php" style="color:white;font-size:14px;">
<button class="category_post1">Dashboard</button></a></li>



             
<li class="navgate"><img style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" src="uploads/<?php echo $photo_sess; ?>" width="80px" height="80px">


<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown"><?php echo $fullname_sess; ?>
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


    </div><br /><br /><br /><br />

<!-- end column nav-->



<center><h3>Welcome!
<b style='color:purple'> <?php echo $fullname_sess; ?> (<?php echo $status_sess; ?>)</b></h3></center><br>

<div class='well'>
Share Contribution Profile Links: <a target='_blank' href='profile_base.php?id=<?php echo $userid_sess; ?>' title='Share Contribution Profile Links' class='''>
<?php echo $site_url; ?>/profile_base.php?id=<?php echo $userid_sess; ?></a> 
</div>




<div id="loader" class='res_center_css'></div>

    <div id="map" class='col-sm-12'></div>



    <script>
      var customLabel = {

        Vm: {
          label: 'P'
        }
       

      };
//center: new google.maps.LatLng(-33.863276, 151.207977),
//zoom: 12
  //center: new google.maps.LatLng(32.944012, -85.953850),
 

 var url_content1 = window.location.href;
var url_p1 = new URL(url_content1);
var identity = url_p1.searchParams.get("identity");
var userid = url_p1.searchParams.get("userid");
   // center: new google.maps.LatLng(32.939659,-85.940643),

//alert(userid);
 

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
center: new google.maps.LatLng(52.3555177,-1.1743197000000691),
          zoom: 6
        });
        var infoWindow = new google.maps.InfoWindow;

$('#loader').fadeIn(400).html('<br><div style="color:black;background:#c1c1c1;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i>  &nbsp;Please Wait, Google Map is being Loaded...</div>');

          //downloadUrl('map.php', function(data) {
			  //downloadUrl('map1.php?identity='+identity, function(data) {

//href='comments_frontend.php?title=" + title +"&post_id=" + id +"'

 downloadUrl('map_private_backend.php?identity='+identity +'&userid=' + userid, function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
var timing = markerElem.getAttribute('timing');
var data_type = markerElem.getAttribute('data_type');
var fullname = markerElem.getAttribute('fullname');
var photo = markerElem.getAttribute('photo');
              var type = markerElem.getAttribute('type');
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



if(data_type=='public'){
                var map_data = "<div style='background:#c1c1c1; border-bottom: 2px dashed purple;'>" +
"<div style='background:#008080;color:white;padding:10px;'>Users Map Location Center</div><br />" +
"<img src='uploads/" + photo +"' style='width:50px;max-width:50px;max-height:50px;height:50px;border-radius:50%'><br>" +
"<span><b>Name:</b> " + fullname + "</span><br />" +

"<span><b>Location Address: </b>" + address + "</span><br />" +
  "<span><b> <span class='fa fa-calendar'></span>Time:</b></span>" +
"<span data-livestamp='" + timing + "'></span></span><br /><br />"+

                    "</div>";
}




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
    </script>





    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_map_keys; ?>&callback=initMap">
    </script>


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






