<?php  
/// обновление товаров
	$connect = mysqli_connect("localhost", "root", "", "tbl_page");
	$id = $_POST["id"];  
	$text = $_POST["text"];  
	$column_name = $_POST["column_name"];  
	$sql = "UPDATE tbl_page SET ".$column_name."='".$text."' WHERE id='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Обращение обновлено';  
	}  
 ?>