<?php

ini_set('memory_limit', '-1');
set_time_limit(0);
22222222
// require_once 'php/db/db.php';
// require_once("php/db/function_db_v2.php");

$username 	= strtolower($_POST['username']);
$passold 	= trim($_POST['passold']);
$passnew 	= trim($_POST['passnew']);
$passnew1 	= trim($_POST['passnew1']);

$type_authen = $_POST['type_authen'];
if($type_authen == 'authen'){

	$server = "172.16.250.101";
	$user 	= "root";
	$pass 	= 'G$ku@789';
	$dbName = "giffarine";
	
	$mysqli_a = new mysqli($server, $user, $pass, $dbName);

	if($mysqli_a->connect_errno){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	if(!$mysqli_a->set_charset("utf8")){
		printf("Error loading character set utf8: %s\n", $mysqli_a->error);
	}

	$s1 = " SELECT * FROM giffarine.radcheck 
		WHERE username = '$username' AND value = '$passold'
		LIMIT 1 ";
	$r1 = $mysqli_a->query($s1);
	if($r1->num_rows == 1){
		$f1 = $r1->fetch_assoc();
		$s2 = " UPDATE giffarine.radcheck SET value = '$passnew'
				WHERE id = '".$f1['id']."' AND username = '$username'
				LIMIT 1 " ;
		$r2 = $mysqli_a->query($s2);
		echo "<script>alert('เปลี่ยนรหัสผ่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='change_pass_authen.php'</script>";
	}else{
			echo "<script>alert('รหัสผ่านเก่าไม่ถูกต้อง กรุณาลองใหม่')</script>";
			echo "<script>window.location='change_pass_authen.php'</script>";
	}

    // echo '11';
}else{
	require_once 'php/db/db_authen_v2.php';

	$server = $server_a2;
	$user 	= $user_a2;
	$pass 	= $pass_a2;
	$dbName = $dbName_a2;
	
	
	$s1 = " SELECT * FROM radius.radcheck 
		WHERE username = '$username' AND value = '$passold'
		LIMIT 1 ";
	$r1 = $mysqli_a2->query($s1);
	if($r1->num_rows == 1){
		$f1 = $r1->fetch_assoc();
		$s2 = " UPDATE radius.radcheck SET value = '$passnew'
				WHERE id = '".$f1['id']."' AND username = '$username'
				LIMIT 1 " ;
		$r2 = $mysqli_a2->query($s2);
		echo "<script>alert('เปลี่ยนรหัสผ่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='change_pass_authen.php'</script>";
	}else{
			echo "<script>alert('รหัสผ่านเก่าไม่ถูกต้อง กรุณาลองใหม่')</script>";
			echo "<script>window.location='change_pass_authen.php'</script>";
	}

    // echo '22';
}
// echo $server."<br>".$user."<br>".$pass."<br>".$dbName; exit();


// $s1 = " SELECT * FROM giffarine.radcheck 
// 		WHERE username = '$username' AND value = '$passold'
// 		LIMIT 1 ";
// $r1 = $mysqli_a->query($s1);
// if($r1->num_rows == 1){
// 	$f1 = $r1->fetch_assoc();
// 	$s2 = " UPDATE giffarine.radcheck SET value = '$passnew'
// 			WHERE id = '".$f1['id']."' AND username = '$username'
// 			LIMIT 1 " ;
	// $r2 = $mysqli_a->query($s2);
	
	// if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
	// 	$_SESSION['cron']['ip_client'] = explode(',' , $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
	// }else{
	// 	$_SESSION['cron']['ip_client'] = $_SERVER['REMOTE_ADDR'];
	// }	
	// stampUser('cron', $username.' | '.$passold.' | '.$passnew.' | '.$passnew1);
	
// 	echo "<script>alert('เปลี่ยนรหัสผ่านเรียบร้อยแล้ว')</script>";
// }

// else{
// 	echo "<script>alert('รหัสผ่านเก่าไม่ถูกต้อง กรุณาลองใหม่')</script>";
// 	echo "<script>window.location='change_pass_authen.php'</script>";
// }


?>