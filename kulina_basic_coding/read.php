<?php

 require_once('conn.php');

 $sql = "SELECT * FROM user_review";
  
 //Execetute Query diatas
 $query = mysql_query($sql);
 while($dt=mysql_fetch_array($query)){
  $item[] = array(
   "id"=>$dt["id"],
   "order_id"=>$dt["order_id"],
   "product_id"=>$dt["product_id"],
   "user_id"=>$dt["user_id"],
   "rating"=>$dt["rating"],
   "review"=>$dt["review"],
   "created_at"=>$dt["created_at"],
   "updated_at"=>$dt["updated_at"],
  );
 }
 

 $json = array(
    'result' => 'Success',
    'item' => $item
   );
 

 echo json_encode($json);
?>