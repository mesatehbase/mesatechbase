<?php
$dsn='�f�[�^�x�[�X��';
$user='���[�U�[��';
$password='�p�X���[�h';
$pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>
PDO::ERRMODE_WARNING));
?>
<?php
$sql = 'SELECT * FROM tbtest';
$stmt = $pdo->query($sql);
$results = $stmt->fetchAll();
foreach ($results as $row){
 //$row�̒��ɂ̓e�[�u���̃J������������
 echo $row['id'].',';
 echo $row['name'].',';
 echo $row['comment'].'<br>';
}
?>