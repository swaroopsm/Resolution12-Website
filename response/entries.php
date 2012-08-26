<?php
	include("../functions/config.php");
	include("../functions/class.entries.php");
	if(isset($_GET['option'])){
		$o=$_GET['option'];
		$e=new entries();
		switch($o){
			case 'create': if($e->create($_POST['college_name'],$_POST['students']))
										 	echo ":)";
										 else
										 	echo ":(";
										 break;
		}
	}
?>
