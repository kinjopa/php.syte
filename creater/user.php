<?php
require_once '../app/include/database.php';
require_once '../app/include/functions.php';
global $link;

mysqli_connect('localhost','root','root','myblog');
if(isset($_FILES['image']['tmp_name'])){
    move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/".$_FILES['image']['name']);
    if($_GET['edit']>0){
                $sql = mysqli_query($link,"update posts set title='{$_POST['title']}',content ='{$_POST['content']}',image='{$_FILES['image']['name']}' where `id` ='{$_GET['edit']}'");
    }
    else {
        post_add();
    }
}

require_once "index.php";
?>