
<?php 


error_reporting(0);

$id = intval($_POST["id"]);
$userid = strip_tags($_POST["userid"]);


include('data6rst.php');
include('settings.php');


$pstmt_del = $db->prepare('DELETE from recycling where id=:id');
$pstmt_del->execute(array(':id' =>$id));

if($pstmt_del){

//echo "<script>alert('Data successfully Deleted....');</script>";

echo "<script>alert('Data successfully Deleted....'); location.reload();</script>";
echo "<div id='alertdata_uploadfiles_o' style='background:green;color:white;padding:10px;border:none;'>
 Data successfully Deleted....</div><br>";
}else{
// echo nothing
}







?>