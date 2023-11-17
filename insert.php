<?php  
/// Создаем товар
    $connect = mysqli_connect("localhost", "root", "", "tbl_page");
    $sql = "INSERT INTO tbl_page(title, phone, email) VALUES('".$_POST["title"]."', '".$_POST["phone"]."', '".$_POST["email"]."')";  
    if(mysqli_query($connect, $sql))  
    {  
        echo 'Обращение создано';  
    }  
 ?>