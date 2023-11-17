<?php  
/// удаление товаров
	$connect = mysqli_connect("localhost", "root", "", "tbl_page");
	$sql = "DELETE FROM tbl_page WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Обращение удалено';  
	}  
 ?>