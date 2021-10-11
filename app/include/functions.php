<?php

function get_metod(){

    global $link;

    $sql = "SELECT * FROM metod ";

    $result = mysqli_query($link,$sql);

    $metod = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $metod;

}
function get_posts(){
    global $link;

    $sql = "SELECT * FROM posts ";

    $result = mysqli_query($link,$sql);

    $post = mysqli_fetch_all($result,MYSQLI_ASSOC);

    return $post;


}
function post_add()
{
    global $link;
    $sql = mysqli_query($link, "INSERT INTO `posts` (`title`,`image`, `content`,`price`) VALUES ('{$_POST['title']}','{$_FILES['image']['name']}','{$_POST['content']}',{$_POST['price']})");
    if ($sql) {
        echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
     echo mysqli_query;
}

function post_add_metod()
{
    global $link;
    $sql = mysqli_query($link, "INSERT INTO `metod` (`title`,`file`, `text`) VALUES ('{$_POST['title']}','{$_FILES['file']['name']}','{$_POST['text']}')");
    if ($sql) {
        echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
}

function select_table(){
    global $link;
    global $result;
    $sql = ("SELECT * FROM posts");
    $result = mysqli_query($link,$sql);
    return $result;
}
function select_table_metod(){
    global $link;
    global $result;
    $sql = ("SELECT * FROM metod");
    $result = mysqli_query($link,$sql);
    return $result;
}


function delete_post(){

    global $link;
    if($_GET['del']>0){
        mysqli_query($link,"delete from posts where `id` = '{$_GET['del']}'");
    }
}

function delete_post_metod(){

    global $link;
    if($_GET['del']>0){
        mysqli_query($link,"delete from metod where `id` = '{$_GET['del']}'");
    }
}


function update_post(){
    global $link;

    $sql = mysqli_query($link,"update posts set title='{$_POST['title']}',price='{$_POST['price']}',content ='{$_POST['content']}',image='{$_FILES['image']['name']}' where `id` ='{$_GET['edit']}'");
    if ($sql) {
        echo '<p>Данные обновлены.</p>';
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
}
function update_post_metod(){
    global $link;

    $sql = mysqli_query($link,"update metod set title='{$_POST['title']}',text ='{$_POST['text']}',file='{$_FILES['file']['name']}, price='{$_POST['price']}'' where `id` ='{$_GET['edit']}'");
    if ($sql) {
        echo '<p>Данные обновлены.</p>';
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
}