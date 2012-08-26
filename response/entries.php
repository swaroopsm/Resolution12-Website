<?php
	include("../functions/config.php");
	include("../functions/class.entries.php");
	if(isset($_GET['option'])){
		$o=$_GET['option'];
		$e=new entries();
		switch($o){
			case 'create': $e->create($_POST['stu_name'],$_POST['stu_college']);
										 break;
		}
	}
?>
