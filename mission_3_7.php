<?php
$dsn='データベース名';
$user='ユーザー名';
$password='パスワード';
$pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>
PDO::ERRMODE_WARNING));
?>
<?php
$id=1;
$name="namaedesu";
$comment="commentdesu";
$sql='update tbtest set name=:name,comment=:comment where id=:id';
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':name',$name,PDO::PARAM_STR);
$stmt->bindParam(':comment',$comment,PDO::PARAM_STR);
$stmt->bindParam(':id',$id,PDO::PARAM_INT);
$stmt->execute();
?>