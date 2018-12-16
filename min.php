
<?php 
$a=mysqli_connect("localhost","id5928797_root","22222","id5928797_reg");/*заносим в переменную подключение к базе данных*/
$b=trim(htmlspecialchars(stripslashes($_POST[n])));/*получаем из поля с именем n введенную информацию,удаляем пробелы и фильтруем специальные символы*/
$c=trim(htmlspecialchars(stripslashes($_POST[m])));/*получаем из поля с именем m введенную информацию,удаляем пробелы и фильтруем специальные символы*/
/*регистрация*/
if($_POST['a']){/*если нажата кнопка отправить с именем а*/
    $d=mysqli_fetch_assoc(mysqli_query($a,"SELECT id FROM user WHERE name='$b'"));/*в переменную заносим значение из базы и подставляем введенное значение */
if($d){echo'login in base,you cant do it again';exit();/*если в базе есть такое имя то выводим 'login in base,you cant do it again' и заканчиваем дальнейшее выполнение кода*/
 }else{mysqli_query($a,"INSERT INTO user VALUES ('','$b','$c','','','','','','','')");echo'congratulte.You are registrate'."<a href='index.html'>Log In</a>";exit();}}/*если в базе нет такого логина,то сохраняем в базу введенное имя и пароль*/
?>