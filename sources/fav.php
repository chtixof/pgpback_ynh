<?php
$text=file_get_contents('php://input');
$user=$_SERVER["PHP_AUTH_USER"];
$file='pk_'.$user.'.json';
if ($user=="") {
  $out='{"rc":-2,"pk":[]}';  

} else if ($text=="") {
  $fread=file_get_contents($file);
  if ($fread==""){
    $out='{"rc":-3,"pk":[]}';  
  } else {
    $out='{"rc":-1,"pk":'.file_get_contents($file).'}';  
  }  
} else {
  $fstatus=file_put_contents($file,$text) ;
  $out='{"rc":'.$fstatus.',"pk":[]}';  
}
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Content-Type: application/json; charset=utf-8");
echo json_encode($out);   
?>