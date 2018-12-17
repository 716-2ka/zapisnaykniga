<?php 
$a=mysqli_connect("localhost","id5928797_root","22222","id5928797_reg"); 
$login='andy'; 
$password='5689'; 

$b=mysqli_query($a,"INSERT INTO user VALUES ('','$login','$password','','','','','','','')"); 
if($b){ 
echo'занесено в базу данных'; 
}else{ 
echo'ошибка с занесением данных в базу'; 
} 

?>