<?php
require_once '../app/include/database.php';
require_once '../app/include/functions.php';
delete_post_metod();
global $link;
?>

<?php

if($_GET['edit']>0){
    $sql = ("SELECT * FROM metod where `id`='{$_GET['edit']}'");
    $result = mysqli_query($link,$sql);
    $edit_row = mysqli_fetch_array($result);
    global $edit_row;

    if (!$sql) {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
    }
}
?>

<?php

if(isset($_FILES['file']['tmp_name'])){
    move_uploaded_file($_FILES['file']['tmp_name'],"../uploads/".$_FILES['file']['name']);
    if($_GET['edit']>0){
        update_post_metod();
    }
    else {
        post_add_metod();
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="/img/Logo-osu.png" type="image/x-icon">
    <title>Меню редактирования - методички</title>
    <link rel="stylesheet" type="text/css" href="creat.css?<?echo time();?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> </head>
<link href="public/css/bootstrap.css" rel="stylesheet">
<link href="public/font-awesome.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>



<main>
    <div class="container-lg">
        <h2 class="pb-3 pt-4">Форма добавления методичек</h2>
        <form class="form-inline" method="post" enctype="multipart/form-data"  >

            <div class="form-group pb-3">
                <label class="control-label col-sm-2 pb-2" for="login">Заголовок методички</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="login" placeholder="Введите заголовок" name="title" value="<?=$edit_row['title']?>">
                </div>
            </div>

            <div class="form-group pb-3">
                <label class="control-label col-sm-2 pb-2" for="login">Добавить методичку</label>
                <div class="col-sm-10" >
                    <input type="file" class="form-control"  name="file" >
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2 pb-2" for="login">Текст методички</label>
                <div class="col-sm-10 pb-3">
                    <textarea type="text" class="form-control" id="login" placeholder="Введите текст" name="text"><?=$edit_row['text']?></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <?php if($_GET['edit']>0) {?>
                        <button class="btn btn-success " type="submit">Сохранить изменения</button>
                        <a href="index.php" class="btn btn-info">Выйти из меню редактирования</a>
                    <?} else{?>
                        <button class="btn btn-secondary" type="submit">Добавить статью</button>
                    <?}?>
                    <a href="metod.php" class="btn btn-warning">Выйти на главную страницу</a>
                    <a href="index.php" class="btn btn-primary">Редактирование постов</a>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <div class="container-lg">
        <h2 class="pb-3 pt-4">Cписок статей:</h2>
    </div>
    <hr>

    <table class="table-hover table">
        <?php
        global $result;
        select_table_metod();
        $cnt = 0;

        while($row=mysqli_fetch_array($result)){
            ?><tr>
            <td><?=++$cnt;?></td>
           
            <td><?= $row['title']?></td>
            <td><?= $row['col_vo']?></td>
             <td><?= $row['phone']?></td>
              <td><?= $row['adress']?></td>
            <td><a class="btn btn-danger" href='?del=<?=$row[id]?>'>Удалить</a></td>
            <td><a class="btn btn-info" href='?edit=<?=$row[id]?>'>Редактировать</a></td>
            </tr> <?php
        }
        ?>
    </table>



    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/salvattore.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>