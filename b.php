<?php
session_start();/*начать сессию*/
$a=mysqli_connect("localhost","id5928797_root","22222","id5928797_reg");/*подключение к базе*/
$b=$_SESSION['login'];/*ложим в переменную сессию со значением login*/
$d=mysqli_fetch_assoc(mysqli_query($a,"SELECT id FROM user WHERE name='$b'"));/*найти id полльзователя у которого логин $b*/
$g=$d['id'];/*целенаправленный вывод id*/
$r=mysqli_fetch_assoc(mysqli_query($a,"SELECT i,i2,i3,o,p,m,q FROM user WHERE id='$g'"));/*вытащить в базы все значения пользователя по индивидуальному идентификатору*/
$t = array('image/gif','image/png','image/jpeg');/*заносим в массив значения для фильтрации загружаемых файлов*/
if ($_SERVER['REQUEST_METHOD'] == 'POST' && in_array($_FILES['p']['type'],$t)){/*если есть запрос и файл имеет разрения gif,png,jpeg то*/
 rename($_FILES['p']['tmp_name'],'z/'.$d['id'].'.jpg'); /*перемещаем файл из временной папки и переименовываем его присваивая в имени индевидуальный идентификатор*/ 
}

?>


<link  href="css.css" rel="stylesheet"><!-- подключение стилей-->
<body style="background:linear-gradient(to left, #F2C14E, #F78154);"><!-- стиль фона -->
<p id="y">Hello user! Your ip:<?php echo $_SERVER['REMOTE_ADDR'];?></p><!-- ip адресс пользователя -->
 <div id="y2"><img id="z" src="z/<?php echo $d['id'];?>.jpg" alt="foto"></div><!--блок с картинкой -->
<form id="x" enctype="multipart/form-data" method="post"> <!-- форма с функцией загрузки картинки -->
   <input name="p" type="file"/><!--выбор картинки с устройства -->
   <input type="submit" value="download"/><!--кнопка загрузить -->
</form> 
</body>