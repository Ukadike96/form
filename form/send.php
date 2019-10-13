<?php

	$name = $_POST['name'];
	$qty = $_POST['qty'];
	$size = $_POST['size'];
	$price = $_POST['price'];

  $marks = array("Product_Name"=>$name, "Quantity"=>$qty,"Size"=>$size, "Price"=>$price);

  $data= json_encode($marks);
  $file = "products.txt";
file_put_contents($file,$data,FILE_APPEND);


?>
