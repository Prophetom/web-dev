<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Cайт с играми на JS</title>
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
		<div class="content">
		<?php
		include "menu.php";
		?>

			<h1>Мой первый сайт с играми</h1>

			<div class="center">
				<img src="img/photo.png" />
				<div class="box_text">
					<p>
						Привет, меня зовут Леонид), я только начал разбираться в
						веб-программировании и сделал первый сайт с мини играми на
						<i>JavaScript!</i>
					</p>

					<p>
						Я оставлю ссылку на свой
						<a href="https://github.com/Prophetom/VsCode.git"
							><b>Репозиторий,</b></a
						>
						чтобы вы могли оставлять свои предложения по поводу сайта.
					</p>
				</div>
			</div>
		</div>

		<div class="footer">
			Copyright &copy; <?php echo date("Y");?> Prophetom
		</div>
	</body>
</html>
