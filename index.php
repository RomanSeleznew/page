<html>  
    <head>  
        <title>Продажа выпечки</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
    <body>  
        <div class="container">  
			<div class="table-responsive">  
                <header>
                    <div class="container-discription">
                        <h3 text-align="center">Панель администратора</h3>
                    </div>
                </header>
				<span id="result"></span>
				<div id="Page-item"></div>                 
			</div>  
		</div>
    <script srs="js/masckaPhone.js"></script>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
				$('#Page-item').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var title = $('#title').text();  
        var phone = $('#phone').text();  
        var email = $('#email').text(); 
        if(title == '')  
        {  
            alert("Введите имя");  
            return false;  
        }  
        if(phone == '')  
        {  
            alert("Введите номер телефона");  
            return false;  
        }
        if(email == '')  
        {  
            alert("Введите адрес электронной почты");  
            return false;  
        }    
        $.ajax({  
            url:"insert.php",  
            method:"POST",  
            data:{title:title, phone:phone, email:email},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.title', function(){  
        var id = $(this).data("id1");  
        var title = $(this).text();  
        edit_data(id, title, "title");  
    });  
    $(document).on('blur', '.price', function(){  
        var id = $(this).data("id2");  
        var price = $(this).text();  
        edit_data(id,price, "price");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Вы действительно хотите удалить запись?"))  
        {  
            $.ajax({  
                url:"delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>