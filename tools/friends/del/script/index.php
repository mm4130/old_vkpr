﻿<?php $home= $_SERVER['SERVER_NAME']; ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://<?php echo $home;?>/style2.css"> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
</head>

	<body>
	
	<div class='main' >
	
<br>
<b><font class='font1'>Удалить из друзей по списку</font></b>
<hr>



<br>
	<div style='margin-left:250px;'>
	
	<font>Введите список id пользователей, которых вы хотите удалить:</font>
	
		<form action="temp.php" method="post">

			
		<p><textarea name='text' cols='15' rows='15'></textarea> 
		</P>
		
		<p><font>Интервал:<br><br><input type="input" value="1" size="1" name="time1"> - 
		<input type="input" value="15" name="time2" size="1" > сек.</font></p>
			
		<p><input type="submit" value="Отправить" class="button" ></p>
					
		</form>
	</div>
</div>


</body>

</html>
