<?php
$dsn='�f�[�^�x�[�X��';
$user='���[�U�[��';
$password='�p�X���[�h';
$pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>
PDO::ERRMODE_WARNING));
?>
<?php
$sql=$pdo->prepare("INSERT INTO tbtest (id,name, comment) VALUES ('3',:name, :comment)");
$sql->bindParam(':name', $name, PDO::PARAM_STR);
$sql->bindParam(':comment', $comment, PDO::PARAM_STR);
$name='namae3';
$comment='word3'; //�D���Ȗ��O�A�D���Ȍ��t�͎����Ō��߂邱��
$sql->execute();
?>