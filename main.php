<?php
session_start();

$backend_url="http://localhost/api/";
$base_url='/';

$request = explode($base_url,$_SERVER['REQUEST_URI']);

if(isset($request[2])){
$page =  explode('?',$request[2]);
}

	$access = isset($_SESSION["user"])?"app-secure":"app-non-secure";

	if(!empty($page[0])){
	    
	    if($page[0] == "logout"){ session_unset(); echo "<script> window.location.href='/'; </script>"; }
	    
		if(file_exists($access.'/'.$page[0].'.php')){
				include $access.'/'.$page[0].'.php';
	    }
		else{
		include $access.'/404.php';}
	}else{
		include $access.'/index.php';
	}

?>