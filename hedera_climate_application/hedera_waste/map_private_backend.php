<?php 
//error_reporting(0);
 // ensure that there is no whitespace and included file token.php does not have whitespace
header("Content-type: text/xml");
include('data6rst1.php');
// Start XML file, create parent node
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);
$identity = strip_tags($_GET['identity']);
$userid = strip_tags($_GET['userid']);
$res = $db->prepare("SELECT * FROM users where userid = :userid");
$res->execute(array(':userid' =>$userid));
$ro = $res->fetch();
$pic = $ro['photo'];
$result = $db->prepare("SELECT * FROM recycling where id = :id");
$result->execute(array(':id' =>$identity));
//header("Content-type: text/xml");
while ($v1 = $result->fetch()) {
                $id = $v1['id'];
                $timing = $v1['timing'];
                $userid = $v1['userid'];
                $fullname = $v1['fullname'];
                $photo = $pic;
                $address = $v1['pickup_address'];
                $lat = $v1['lat'];
                $lng = $v1['lng'];
                $data ='public';
                $type = 1;
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$id);
  $newnode->setAttribute("name",$fullname);
  $newnode->setAttribute("photo",$photo);
  $newnode->setAttribute("address", $address);
  $newnode->setAttribute("lat", $lat);
  $newnode->setAttribute("lng", $lng);
  $newnode->setAttribute("type", $type);
  $newnode->setAttribute("data_type", $data);
$newnode->setAttribute("fullname", $fullname);
$newnode->setAttribute("userid", $userid);
$newnode->setAttribute("timing", $timing);
}
echo $dom->saveXML();
?>