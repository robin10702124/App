<?
$host='140.118.115.120';//ex:120.105.132.80
$name='root';
$pwd='aaaaaaaa';
$db='test';
$con=mysql_connect($host,$name,$pwd) or die("connection failed");
mysql_select_db($db,$con) or die("db selection failed");

 $result=mysql_query("SELECT * FROM App",$con);//user資料表名稱
 while($row=mysql_fetch_assoc($result)){
 $tmp[]=$row;
 }
 echo json_encode($tmp);
 mysql_close($con);
?>