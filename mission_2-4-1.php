<html>
<head>
<title>form2-4-1</title>
<meta charset="UTF-8 ">
</head>
<body>
<form action="mission_2-4-1.php"method="post">
<input type="text"name="name"value="名前">
<br>
<input type="text"name="comment"value="コメント">
<input type="hidden"name="editform">
<input type="submit"name="send"value="送信">
<br>
<input type="text"name="delete"value="削除対象番号">
<input type="submit"name="deleteNo"value="削除">
<br>
<input type="text"name="edit"value="編集対象番号">
<input type="submit"name="editNo"value="編集">
</form>
</body>
</html>
<?php
$filename='mission_2-4-1.txt';
if(!empty($_POST["name"])&&!empty($_POST["comment"])){
$time = date("Y/m/d H:i:s");
$name=$_POST["name"];
$comment=$_POST["comment"];
if(file_exists($filename)){
	$hairetu=file("mission_2-4-1.txt");
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
?>
<?php
$edit=$_POST["edit"];
if(!empty($edit)){
	$d=file($filename);
	foreach($d as $f){
	$new_liness=(explode("<>",$f));
	array_splice($new_liness,1);
if($new_liness[0]==$edit){
	$new_liness[1]=$data1;
	$new_liness[2]=$data2;
        }
    }
}
?>
<form action="mission_2-4-1.php"method="post">
	<input type="text"name="name"value="<?php echo $data1;?>">
	<input type="text"name="comment"value="<?php echo $data2;?>">
	<input type="hidden"name="editform"value="<?php echo $edit;?>">
	<input type="text"name="edit">
	<input type="submit"value="送信">
</form>
<?php
$filename = "mission_2-4-1.txt";
$lines = file($filename);
foreach($lines as $line){
$new_line=(explode("<>",$line));
	echo$new_line[0]." ".$new_line[1]." ".$new_line[2]." ".$new_line[3]."<br>\n";
}
?>
