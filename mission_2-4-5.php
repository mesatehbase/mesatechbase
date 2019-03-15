<html>
<head>
<title>form2-4-5</title>
<meta charset="UTF-8 ">
</head>
</html>
<?php
$filename='mission_2-4-5.txt';
if(!empty($_POST["name"])&&!empty($_POST["comment"])&&empty($_POST["edit"])){
$time = date("Y/m/d H:i:s");
$name=$_POST["name"];
$comment=$_POST["comment"];
if(file_exists($filename)){
	$hairetu=file("mission_2-4-5.txt");
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
	$new_lines=(explode("<>",$delC));
	array_splice($new_lines,1);
if($new_lines[0]!=$delete){
	$b=fopen($filename, "a");
            fwrite($b, $delC);
            fclose($b);
        } elseif ($new_lines[0] == $delete) {
            $c = fopen($filename, "a");
            fwrite($c, "消去しました。\n");
            fclose($c);
        }
    }
}
$edit=$_POST["edit"];
if(!empty($edit)){
	$d=file($filename);
	$e=fopen($filename, 'w');//wは上書き保存
	fwrite($e,"");
	fclose($e);
	foreach($d as $f){
	$new_liness=(explode("<>",$f));
	array_splice($new_liness,1);
if($new_liness[0]==$edit){
	$data1=$new_liness[1];
	$data2=$new_liness[2];
	$data3=$new_liness[3];
}	
}
	$g=fopen($filename,"a");
	fwrite($g,$edit." ".$data1." ".$data2." ".$data3."<br>\n");
	fclose($g);

}
?>
<form action="mission_2-4-5.php"method="post">
	<input type="text"name="name"placeholder="名前"value="<?php echo htmlspecialchars($data1);?>">
	<br>
	<input type="text"name="comment"placeholder="コメント"value="<?php echo htmlspecialchars($data2);?>">
	<br>
	<input type="text"name="editform"value="<?php echo htmlspecialchars($edit);?>">
	<input type="submit"name="send"value="送信">
	<br>
	<input type="text"name="delete"placeholder="削除対象番号">
	<input type="submit"name="deleteNo"value="削除">
	<br>
	<input type="text"name="edit"placeholder="編集対象番号">
	<input type="submit"name="editNo"value="編集">
</form>
<?php
$filename = "mission_2-4-5.txt";
$lines = file($filename);
foreach($lines as $line){
$new_line=(explode("<>",$line));
	echo$new_line[0]." ".$new_line[1]." ".$new_line[2]." ".$new_line[3]."<br>\n";
}
?>
