<?php
$link = mysqli_connect('localhost', 'root', '', 'mucchad1'); 
if (mysqli_connect_errno())
 {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

/*-------- Fetch data -------------*/
function fetch_data_qry($sqlqry=""){	
	global $link;
	$resultArrayget = array();
	if(trim($sqlqry)==""){
		return false;
	}
	$stmt = mysqli_query($link, $sqlqry);
	while ($rowdata = mysqli_fetch_assoc($stmt)) {
		$resultArrayget[] = $rowdata;
	}
	return $resultArrayget;
	//mysqli_free_result($stmt);
}

function fetch_data_qry1($sqlqry=""){	
	return $sqlqry;
}
/*-------- Insert data -------------*/
function insert_data_qry($sqlqry="")
{	
	global $link;
	if(trim($sqlqry)==""){
		return false;
	}	
	$stmt = mysqli_query($link, $sqlqry);
	return $stmt;	 	
}
?>