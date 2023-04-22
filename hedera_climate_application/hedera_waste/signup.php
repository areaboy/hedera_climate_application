<?php
//error_reporting(0);




// start users registrations.


if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);
$fullname = strip_tags($_POST['fullname']);
$status = strip_tags($_POST['status']);
$hedera_account = strip_tags($_POST['hedera_account']);

//hash password before sending it to database...
$options = array("cost"=>4);
$hashpass = password_hash($password,PASSWORD_BCRYPT,$options);


if ($username == ''){
echo "<div style='background:red;padding:8px;color:white;border:none;'>Email is empty</div>";
exit();
}



//insert into database

$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");
$mt = microtime(true);
$mdx = md5($mt);
$uidx = uniqid();
$userid = $uidx.$timer.$mdx;

include('data6rst.php');

//alter table users add column(photo varchar(300),userid varchar(300));


// check if user with this username already exits
$result_verified = $db->prepare('select * from users where username=:username');
$result_verified->execute(array(':username' =>$username));

//$result_verified = $db->prepare('select * from users');
//$result_verified->execute(array());
 $rows= $result_verified->fetch();
$norows= $result_verified->rowCount();

//if($norows== 1){

if($norows ==1){
echo "<div style='background:red;padding:8px;color:white;border:none;'>These Email Address already exist</div>";
exit();
}


$statement = $db->prepare('INSERT INTO users

(username,fullname,password,created_time,timing,status,photo,userid,hedera_account)
 
                          values
(:username,:fullname,:password,:created_time,:timing,:status,:photo,:userid,:hedera_account)');

$statement->execute(array( 

':username' => $username,
':fullname' => $fullname,
':password' => $hashpass,		
':created_time' => $created_time,
':timing' => $timer,
':status' =>$status,
':photo' =>'admin.png',
':userid' =>$userid,
':hedera_account' =>$hedera_account

));


$email = $username;

$statement1x = $db->prepare('INSERT INTO users_recycling
(userid,fullname,photo,email,city,glass,paper_card,metals,plastic,textiles,weee_metals,iba_metals,other,compost_material,points,hedera_account,total_rewards)
                        values
(:userid,:fullname,:photo,:email,:city,:glass,:paper_card,:metals,:plastic,:textiles,:weee_metals, :iba_metals, :other,:compost_material,:points,:hedera_account,:total_rewards)');

$statement1x->execute(array( 
':userid' => $userid,
':fullname' => $fullname,
':photo' => 'admin.png',
':email' => $email,
':city' => 'England',
':glass' => '0',
':paper_card' => '0',
':metals' => '0',
':plastic' => '0',
':textiles' => '0',
':weee_metals' => '0',
':iba_metals' => '0',
':other' => '0',
':compost_material' => '0',
':points'  => '0',
':hedera_account' =>$hedera_account,
':total_rewards' => '0'

));


/*
CREATE TABLE `users_recycling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(300) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL,
`email` varchar(300) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
`glass` varchar(130) DEFAULT NULL,
`paper_card` varchar(130) DEFAULT NULL,
`metals` varchar(130) DEFAULT NULL,
`plastic` varchar(130) DEFAULT NULL,
`textiles` varchar(130) DEFAULT NULL,
`weee_metals` varchar(130) DEFAULT NULL,
`iba_metals` varchar(130) DEFAULT NULL,
`other` varchar(130) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
*/


if($statement1x){
echo  "<script>alert('Account Successfully Created. You can Login Now');</script>";
echo "<div style='background:green;padding:8px;color:white;border:none;'>Account Successfully Created. You can Login Now...</div>";
echo "<script>
$('#myModal_signup').modal('hide');
$('#myModal_login').modal('show');
</script>
";

}

              else {
echo "<div style='background:red;padding:8px;color:white;border:none;'>Account Creation Failed. Ensure there is internet connections...</div>";
                }

}


?>



