<?php
$no=$_GET['no'];

$no=$no+1;

function err()
{
	die(mysql_error()."  ".mysql_errno());
}

if(!$conRes = @mysql_connect("localhost","root",""))
        die("Could not connect");

//Step 2- Select DB
mysql_select_db("mmdb",$conRes);

//Step 3- Run a query
$sql="Update products set product_id=".$no;
if(! $result= @mysql_query($sql,$conRes))
{
	err();
}

header("Location: {$_SERVER["HTTP_REFERER"]}");
exit;
?>