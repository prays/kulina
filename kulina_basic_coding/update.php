<?php
	require_once('conn.php');
 
	$id					= $_REQUEST['id'];
	$order_id			= $_REQUEST['order_id'];
	$product_id			= $_REQUEST['$product_id'];
	$user_id			= $_REQUEST['user_id'];
	$rating				= $_REQUEST['rating'];
	$review				= $_REQUEST['review	'];
	$created_at			= $_REQUEST['created_at'];
	$updated_at			= $_REQUEST['updated_at'];
	
	// update
	$sql	= "UPDATE user_review SET order_id = '$order_id', product_id='$product_id', 
       user_id='$user_id', rating='$rating',review	=
	   $review',created_at='$created_at',updated_at ='$updated_at' WHERE id='$id'";
	$query 	= mysqli_query($conn, $sql );
	
	if($query) {
	    echo json_encode(array( 'response'=>'success' ));
	} else {
	    echo json_encode(array( 'response'=>'failed' ));
	}
?>