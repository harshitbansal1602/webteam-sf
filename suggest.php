<?php
require 'connect.inc.php';

if( isset($_GET) && !empty($_GET) ){
	$search = $_GET['key'];
	
	if( strlen($search) <3 ){
		
	}
	else{
		$search_array = explode(" ",$search);
		$x=0;
		$search_query="";
		foreach($search_array as $search_part){
			$x++;
			if($x == 1){
				$search_query .="`name` LIKE '%$search_part%' ";				
			}
			else{
				$search_query .="AND `name` LIKE '%$search_part%'";
			}
		}
		
		$query = "SELECT * FROM `songs` WHERE $search_query";
		$query_run = mysql_query($query);
		$num = mysql_num_rows($query_run);
		
		if($num==0){
			echo '0';
		}
		else{
			while( $row = mysql_fetch_assoc($query_run) ){
				
				$name = $row['name'];
				echo '<li>'.$name.'</li>';
			}
		}
		
	}
}


?>