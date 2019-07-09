<!DOCTYPE html>
<html>
<body>
<?php
$t=date("D");
echo $t;
if($t =="Mon")
{
	echo "<br>Pizza";
}
else
if($t =="Tue")
{
	echo "<br>daal";
}
else
if($t =="Wed")
{
	echo "<br>Chiken";
}
else
if($t =="Thu")
{
	echo "<br>Biryani";
}
else
if($t =="Fri")
{
	echo "<br>BBQ";
}
else
if($t =="Sat")
{
	echo "<br>Shawarma";
}
else
{
	echo "<br>Pulav";
}
?> 
</body>
</html>