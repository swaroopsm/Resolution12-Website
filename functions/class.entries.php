<?php
	class entries{
		
		private $id,$name,$college,$status;
		
		public function create($stu_name,$stu_college){
			$stu_name=mysql_real_escape_string($stu_name);
			$stu_college=mysql_real_escape_string($stu_college);
			return(mysql_query("INSERT INTO entries(name,college) VALUES('$stu_name','$stu_college')"));
		}
	}
?>
