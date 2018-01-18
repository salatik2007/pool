<?php
require_once (__DIR__).'/../includes/admin/head.php';
require_once (__DIR__).'/../includes/admin/nav.php';
?>


<div class="content">
<!--    Добавляем текст-->

    <form method="post" action="/create">
        <input type="text" value=""  name="id" hidden>
            <input type="text" value=""  name="id" hidden> <!-- Делаем невидемое поле с помощью хиден -->

        <br><input type="text" placeholder="Заголовок" value=""  name="title"><br>
        <br><input type="date" value="" placeholder="Дата"  name="calendar"><br>
        <br><input type="text" value="" placeholder="Рейтинг"  name="reit"><br>
        <br>
        <br><textarea name="countent">
					</textarea>
            <br>
            <br>
            <hr>

            <input type="submit">
        </form><!-- /.blog-post -->

</div>
</body>
</html>



