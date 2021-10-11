<?php
require_once 'database.php';
 global $link;

if (isset($_POST['title']) && isset($_POST['col_vo']) && isset($_POST['phone']) && isset($_POST['adress']) ){


 $sql = mysqli_query($link, "INSERT INTO `metod` (`title`, `col_vo`,`phone`,`adress`) VALUES ('{$_POST['title']}', '{$_POST['col_vo']}' , '{$_POST['phone']}' , '{$_POST['adress']}')");
    //Если вставка прошла успешно
  


}
header('Location: ../../index.php#sec_fre');
exit();


?>

