
<?php 
$a=mysqli_connect("localhost","id5928797_root","22222","id5928797_reg");/*заносим в переменную подключение к базе данных*/
$b=trim(htmlspecialchars(stripslashes($_POST[n])));/*получаем из поля с именем n введенную информацию,удаляем пробелы и фильтруем специальные символы*/
$c=trim(htmlspecialchars(stripslashes($_POST[m])));/*получаем из поля с именем m введенную информацию,удаляем пробелы и фильтруем специальные символы*/
/*регистрация*/
if($_POST['a']){/*если нажата кнопка отправить с именем а*/
    $d=mysqli_fetch_assoc(mysqli_query($a,"SELECT id FROM user WHERE name='$b'"));/*в переменную заносим значение из базы и подставляем введенное значение */
if($d){echo'login in base,you cant do it again';exit();/*если в базе есть такое имя то выводим 'login in base,you cant do it again' и заканчиваем дальнейшее выполнение кода*/
 }else{mysqli_query($a,"INSERT INTO user VALUES ('','$b','$c','','','','','','','')");echo'congratulte.You are registrate'."<a href='index.html'>Log In</a>";exit();}}/*если в базе нет такого логина,то сохраняем в базу введенное имя и пароль*/

 /*вход в зарегестрированный аккаунт*/
if($_POST['b']){/*если нажата кнопка отправить с именем b*/
    session_start();/*открываем сессию*/
    $e=mysqli_fetch_assoc(mysqli_query($a,"SELECT name FROM user WHERE name='$b'"));/*ищем в базе имя с введенным значением*/
    if($e){/*если введенное имя есть*/
        if (mysqli_fetch_assoc(mysqli_query($a,"SELECT password FROM user WHERE password='$c'"))){/*ищем в базе введенный пароль,если он есть то*/
            $_SESSION['login']=$e['name'];/*сохраняем в сессию имя пользователя,если логин с паролем верны*/
            header("Location:b.php"); /*переходим в файл обработчик b.php*/ 
        }else{echo'not write password';}/*если в базе нет таког пароля то выводим not write password*/
        }else{echo'nety tokogo logina';}/*если введенного имени нет то выводим nety tokogo logina'*/
}
?>
<body style="background:#373059;font-size:6vw;color:#fff;text-align:center;padding-top:4vw;"></body>
