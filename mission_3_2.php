<?php
$dsn='�f�[�^�x�[�X��';
$user='���[�U�[��';
$password='�p�X���[�h';
$pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>
PDO::ERRMODE_WARNING));
?>
<?php
$sql="CREATE TABLE IF NOT EXISTS tbtest"
."("
."id INT auto_increment primary key,"
."name char(32),"
."comment TEXT"
.");";
$stmt=$pdo->query($sql);
?>