<?php
//Step 1- Using mysql_connect()
if(!$conRes = @mysql_connect("localhost","root",""))
        die("Could not connect");

//Step 2- Select DB
mysql_select_db("mmdb",$conRes);

//Step 3- Run a query
$result= mysql_query("Select product_id FROM products",$conRes);
//$result= mysql_query("Select Student.name from Student",$conRes);

//Step 4-Retrieve a row of results
$row = mysql_fetch_array($result,MYSQL_BOTH);
{
	$cart=$row['product_id'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TEST</title>
</head>
<body>
	<img src="image.png" alt="" width="500" height="600"><br>
	<label>Rs. 3499<br><br></label>
		<a href="cart.php?no=<?php echo $cart;?>">Add to cart</a>
		<br><br><br><br>
		<label> <?php echo $cart; ?> Items in cart </label>
</body>
</html>