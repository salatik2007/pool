EDIT

<?php 

print_r($parameters);

print_r($res);

/*<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
*/
?>
<div class="content">
<!--    Добавляем текст-->

    <form method="post" action="/edit/<?=$res['id']?>">
        <input type="text" value=""  name="id" hidden>
            <input type="text" value="<?=$res['id']?>"  name="id" hidden> <!-- Делаем невидемое поле с помощью хиден -->

        <br><input type="text" placeholder="Заголовок" value="<?=$res['title']?>"  name="title"><br>
        <br><input type="date" value="" placeholder="Дата"  name="calendar"><br>
        <br><input type="text" value="" placeholder="Рейтинг"  name="reit"><br>
        <br>
        <br><textarea name="countent"><?=$res['countent']?>
					</textarea>
            <br>
            <br>
            <hr>

            <input type="submit">
        </form><!-- /.blog-post -->

</div>