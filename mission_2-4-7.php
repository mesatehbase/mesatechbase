<html>
<head>
<title>form2-4-7</title>
<meta charset="UTF-8 ">
</head>
</html>
<?php
$filename='mission_2-4-7.txt';
if(!empty($_POST["name"])&&!empty($_POST["comment"])&&empty($_POST["edit"])&&empty($_POST["editform"])){
$time = date("Y/m/d H:i:s");
$name=$_POST["name"];
$comment=$_POST["comment"];
if(file_exists($filename)){
	$hairetu=file("mission_2-4-7.txt");
	$number=count($hairetu)+1;
}else{
	$number=1;
}
$newdata=$number."<>".$name."<>".$comment."<>".$time."\n";//."\n"は改行しろということ
	$fp=fopen($filename, 'a+');//aは付け加えて保存
	fwrite($fp,$newdata);
	fclose($fp);
	}
if(isset($_POST["delete"])){
	$delete=$_POST["delete"];
	$delCon =file($filename);
	$a=fopen($filename, 'w');//wは上書き保存
	fwrite($a,"");
	fclose($a);
	foreach($delCon as $delC){
	$new_line=(explode("<>",$delC));
	array_splice($new_line,1);
if($new_line[0]!=$delete){
	$b=fopen($filename, "a");
            fwrite($b, $delC);
            fclose($b);
        } elseif ($new_line[0] == $delete) {
            $c = fopen($filename, "a");
            fwrite($c, "消去しました。\n");
            fclose($c);
        }
    }
}
$edit=$_POST["edit"];
if(!empty($edit)){
	$d=file($filename);
	foreach($d as $f){
	$new_line=(explode("<>",$f));
if($new_line[0]==$edit){
	$data1=$new_line[1];
	$data2=$new_line[2];
	$data3=$new_line[3];
}	
}
}
$editform=$_POST["editform"];
if(!empty($_POST["name"])&&!empty($_POST["comment"])&&!empty($_POST["editform"])){
	$d=file($filename);
	$e=fopen($filename, 'w');//wは上書き保存
	fwrite($e,"");
	fclose($e);
	foreach($d as $e){
	$new_line=(explode("<>",$e));
	array_splice($new_line,1);
if($new_line[0]==$editform){
	$f=fopen($filename, "a");
	$newdata=$editform."<>".$_POST['name']."<>".$_POST['comment']."<>".date("Y/m/d H:i:s")."\n";
	fwrite($f,$newdata);
	fclose($f);
	}elseif($new_line[0]!=$editform){
	$g=fopen($filename, "a");
	fwrite($g, $e);
        fclose($g);
}
}
}	
?>
<form action="mission_2-4-7.php"method="post">
	<input type="text"name="name"placeholder="名前"value="<?php echo htmlspecialchars($data1,ENT_QUOTES);?>">
	<br>
	<input type="text"name="comment"placeholder="コメント"value="<?php echo htmlspecialchars($data2,ENT_QUOTES);?>">
	<input type="hidden"name="editform"value="<?php echo htmlspecialchars($edit,ENT_QUOTES);?>">
	<input type="submit"name="send"value="送信">
	<br>
	<input type="text"name="delete"placeholder="削除対象番号">
	<input type="submit"name="deleteNo"value="削除">
	<br>
	<input type="text"name="edit"placeholder="編集対象番号">
	<input type="submit"name="editNo"value="編集">
</form>
<?php
$filename = "mission_2-4-7.txt";
$lines = file($filename);
foreach($lines as $line){
$new_line=(explode("<>",$line));
	echo$new_line[0]." ".$new_line[1]." ".$new_line[2]." ".$new_line[3]."<br>\n";
}
?>
