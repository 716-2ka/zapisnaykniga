<?php
session_start();/*начать сессию*/
$a=mysqli_connect("localhost","id5928797_root","22222","id5928797_reg");/*подключение к базе*/
$b=$_SESSION['login'];/*ложим в переменную сессию со значением login*/
$d=mysqli_fetch_assoc(mysqli_query($a,"SELECT id FROM user WHERE name='$b'"));/*найти id полльзователя у которого логин $b*/
$g=$d['id'];/*целенаправленный вывод id*/
$r=mysqli_fetch_assoc(mysqli_query($a,"SELECT i,i2,i3,o,p,m,q FROM user WHERE id='$g'"));/*вытащить в базы все значения пользователя по индивидуальному идентификатору*/
?>