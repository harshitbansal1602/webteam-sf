<?php
require 'connect.inc.php';

function showall(){
	$query = "SELECT * FROM `songs`";
		$query_run = mysql_query($query);
		$num = mysql_num_rows($query_run);
		
		if($num==0){
			echo 'No Results Found';
		}
		else{
			while( $row = mysql_fetch_assoc($query_run) ){
				
				$name = $row['name'];
				$url_img = $row['url_img'];
				echo '
				 <div class="card horizontal">
				  <div class="card-image">
					<img src="'.$url_img.'">
				  </div>
				  <div class="card-stacked">
					<div class="card-content">
					  <h4>'.$name.'</h4>
					</div>
					<div class="card-action">
					  <a href="#">Download For free</a>
					</div>
				  </div>
				</div>
				
				';
		}}
}



if( isset($_GET['search']) && !empty($_GET['search']) ){
	$search = $_GET['search'];
	
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
			echo 'No Results Found!';
		}
		else{
			while( $row = mysql_fetch_assoc($query_run) ){
				
				$name = $row['name'];
				$url_img = $row['url_img'];
				echo '
				 <div class="card horizontal">
				  <div class="card-image">
					<img src="'.$url_img.'">
				  </div>
				  <div class="card-stacked">
					<div class="card-content">
					  <p>'.$name.'</p>
					</div>
					<div class="card-action">
					  <a href="#">This is a link</a>
					</div>
				  </div>
				</div>
				
				';
			}
		}
		
	}
}else {
	showall();
}


?>