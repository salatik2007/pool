<?php
require_once (__DIR__).'/../includes/admin/head.php';
require_once (__DIR__).'/../includes/admin/nav.php';
?>


			<div class="content">
				Редактирование текста
				<div class="block">	 <a href="/create" class="btn">Create</a>
                    <br><br>
				<?php
                foreach($znach as $result){
                    ?>
						<div class="blog-post">

							<h2 class="blog-post-title"><?=$result['title'];?></h2>
                            <br>
                            <h5><?=$result['calendar'];?></h5>
							<p class="blog-post-meta"><?=$result['countent'];?></p>

							<p><?=$result['title'];?></p>
                            <br><br>
							<hr>
							reit: <?=$result['reit'];?>
<!--							<a href="/edit?id=--><?//= //$res['id'];?><!--" class="btn">Edit</a>-->
<!--							<a href="/delete?id=--><?//= //$res['id'];?><!--" class="btn">delete</a>-->
<a href="/edit/<?=$result['id'];?>"><button>EDIT</button></a>
<?php 

}
?>

                            <?php
                            require_once (__DIR__).'/../includes/admin/nav.php';
                            ?>



