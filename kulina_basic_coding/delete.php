<?php
	require_once('connection.php');
 
	$id	= $_REQUEST['id'];
	
	// delete
	$query = mysqli_query($conn, "DELETE FROM use_review WHERE id='$id' ");
 
	if($query) {
	    echo json_encode(array( 'response'=>'success' ));
	} else {
	    echo json_encode(array( 'response'=>'failed' ));
	}
?>