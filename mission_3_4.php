<?php
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>
PDO::ERRMODE_WARNING));
?>
<?php
$sql='SHOW CREATE TABLE tbtest';
$result=$pdo -> query($sql);
foreach ($result as $row){
echo $row[1];
}
echo "<hr>";
?>
