<?php  
 $connect = mysqli_connect("localhost", "root", "", "tbl_page");  
 $output = '';  
 $sql = "SELECT * FROM tbl_page ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
/// получаем таблицу
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered table-hover"> 
               <thead class="thead-dark"> 
                <tr>  
                     <th width="5%" style="text-align: center;">ID</th>  
                     <th width="25%" style="text-align: center;">Имя</th>  
                     <th width="25%" style="text-align: center;">Номер телефона</th> 
                     <th width="25%" style="text-align: center;">Электронная почта</th> 
                     <th width="15%" style="text-align: center;">Удалить/Создать</th>  
                </tr>
               </thead>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM tbl_shop LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td style="text-align: center; vertical-align: middle;">'.$row["id"].'</td>  
                     <td style="vertical-align: middle;" class="title" data-id1="'.$row["id"].'" contenteditable>'.$row["title"].'</td>  
                     <td style="vertical-align: middle;" class="phone" data-id2="'.$row["id"].'" contenteditable>'.$row["phone"].'</td>  
                     <td style="vertical-align: middle;" class="mail" data-id3="'.$row["id"].'" contenteditable>'.$row["email"].'</td>  
                     <td style="text-align: center;"><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">Удалить</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="title" contenteditable></td>  
                <td id="phone" contenteditable data-phone-pattern></td>
                <td id="email" contenteditable></td>  
                <td style="text-align: center;"><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Создать</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
                    <td></td>  
                    <td id="title" contenteditable></td>  
                    <td id="phone" contenteditable data-phone-pattern></td>
                    <td id="email" contenteditable></td>  
                    <td style="text-align: center;"><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Создать</button></td> 
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  

/// выводим таблицу во фронтенд
 echo $output;

?>


 