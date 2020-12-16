<!--
ЗАДАЧА: Вывести три поста (автор и текст поста) из своей таблицы twitter.
ЧТО НУЖНО СДЕЛАТЬ:
1. Подключится к своей Базе данных.
2. Сделать запрос к таблице twitter.
3. Вывести три поста.

Внизу читай комментарии, где что выводить.

Если закончил, сделай добавление нового твита.

-->

<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">
	<!-- ШАПКА -->
	<div class="header border-bottom pb-2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-xl-5">
					<div class="row">
						<div class="col-4">
							<img src="img/icons8-home-50.png" class="w-25">
							<a href="">Домой</a>
						</div>
						<div class="col-4 px-0">
							<img src="img/icons8-notification-50.png" class="w-25">
							<a href="">Уведомления</a>
						</div>
						<div class="col-4">
							<img src="img/icons8-new-post-50.png" class="w-25">
							<a href="">Сообщения</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-xl-3">
					<img class="w-25" src="img/icons8-twitter-50.png" >
				</div>
				<div class="col-sm-12 col-md-4 col-xl-4">
					<input type="" name="">
					<a href=""><img src="img/avatar.jpg" class="rounded-circle ml-4"></a>
					<button type="button" class="btn btn-primary">Твитнуть</button>					
				</div>
			</div>
		</div>
	</div>
	<!-- ДИВ С КОНТЕНТОМ -->						
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка --> <!-- ПРОФИЛЬ-->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- Описание профиля -->
					<div class=" bg-white">
						<!--фон-->
						<a href=""><img src="img/background.jpg" class="img-fluid"></a>
						<!--карточка-->
						<div class="row">
							<div class="col-4">
								<a href=""><img src="img/avatar.jpg" class="rounded-circle"></a>
							</div>
							<div class="col-8">
								<div>
									<a href="">Mary Smith</a>
								</div>
								<div>
									<a href="">@MarySmith</a>
								</div>
							</div>
						</div>
						<!--Статистика-->
						<div class="row pt-1 pb-1 pr-1 pl-1">
							<div class="col-6">
								<a href="">
									<b>Твиты</b><br>276
								</a>
							</div>

							<div class="col-6">
								<a href="">
									<b>Читаемые</b><br> 106
								</a>
							</div>										
						</div>	
					</div>

					<!-- Актуальные темы для вас-->
					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3" >
						<div class="">
							<h6>Актуальные темы для вас</h6>
						</div>

						<div>
							<a href="">#inktober</a>
						</div>
						<div>
							<a href="">#movies</a>
						</div>
						
					</div>
				</div>

				<!-- Средняя колонка: Лента твитов: добавить, твиты -->
				<div class="col-sm-12 col-md-8 col-xl-6" style="">
					<div class="pt-2 bg-white">
						<div class="row">
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle ml-4">
							</div>
							<div class="col-10">
								<form action="insert.php" method="GET">
									<input name="author" class="form-control" placeholder="Автор">
									<textarea name="twit" class="form-control mt-1" placeholder="Что нового?"></textarea>
									<div class="col-12">
										<div class="row mt-2">
											<div class="col-8 pl-0 pr-0">
												<a href="" class=""><img src="images/picture.png"></a>
												<a href="" class="ml-2"><img src="images/gif.png"></a>
												<a href="" class="ml-2"><img src="images/graph.png"></a>
												<a href="" class="ml-2"><img src="images/placeholder.png"></a>
											</div>
											<div class="col-4 ">
												<button type="submit" class="btn btn-primary">Твитнуть</button>
											</div>
										</div>
									</div>
								</form>
								<!-- 
									
									ЗДЕСЬ СОЗДАЕШЬ ФОРМУ С ИНПУТАМИ И КНОПКОЙ "Твитнуть"

								-->
							</div>
						</div>
						<!-- новый пост -->
						<div class="row mt-4">
							<div class="col-2">
							</div>
							<div class="col-xl-10">
									<h5>
									<?php
										echo $_GET["author"];
									?><!--

										ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА НОВОГО ТВИТА

									-->
									</h5>
									<p>
									<?php
										echo $_GET["twit"];
									?><!-- 

										ЗДЕСЬ ВЫВОДИШЬ ТЕКСТА НОВОГО ТВИТА

									--></p>
							</div>
						</div>

						<!-- 

							НИЖЕ ТРИ ДИВА ДЛЯ ВЫВОДА ТВИТОВ ИЗ ТАБЛИЦЫ 'twitter'

						 -->
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle ml-4">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											$connect = mysqli_connect("127.0.0.1","root", "", "twitter");

											$query_text = "SELECT * FROM twits";

											$query = mysqli_query($connect, $query_text);

											


											$stroka = $query->fetch_assoc();
											echo $stroka['author'];
										?>
									<!-- 
									ЗДЕСЬ: 
										1. ПОДКЛЮЧИСЬ К СВОЕЙ БАЗЕ ДАННЫХ
										2. СДЕЛАЙ ЗАПРОС К ТАБЛИЦЕ

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ПЕРВОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->


									</h5>
								</div>
								<div>
									<p>
										<?php 
											echo $stroka['twit'];
										?>
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ПЕРВОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	

									</p>
									<?php
										echo "<img src='".$stroka['img']."' class ='col-10 border pl-0 pr-0 rounded'>"
									?>	
									<!-- 

									место для картинки

									-->	
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle ml-4">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											$stroka2 = $query->fetch_assoc();
											echo $stroka2['author'];
										?>	
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ВТОРОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->


									</h5>
								</div>
								<div>
									<p>
										<?php
											echo $stroka2['twit'];
										?>	
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ВТОРОГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	

									</p>
									<?php
										echo "<img src='".$stroka2['img']."' class ='col-10 border pl-0 pr-0 rounded'>"
									?>	
									<!-- 

									место для картинки

									-->	
								</div>
							</div>
						</div>
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<img src="img/avatar.jpg" class="rounded-circle ml-4">
							</div>
							<div class="col-xl-10">
								<div class="d-flex">
									<h5>
										<?php
											$stroka3 = $query->fetch_assoc();
											echo $stroka3['author'];
										?>	
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ИМЯ АВТОРА ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->


									</h5>
								</div>
								<div>
									<p>
										<?php
											echo $stroka3['twit'];
										?>	
									<!-- 

									ЗДЕСЬ ВЫВОДИШЬ ТЕКСТ ТРЕТЬЕГО ТВИТА ИЗ ТАБЛИЦЫ 'twitter'

									-->	

									</p>
									<?php
										echo "<img src='".$stroka3['img']."' class ='col-10 border pl-0 pr-0 rounded'>"
									?>	
									<!-- 

									место для картинки

									-->	
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- "Читаемые" -->
					<div class="bg-white pt-3 pb-3 pl-3 pr-3">
						<!-- форму создать здесь -->
						<form action="insert1.php" method="GET">
							<input name="name" class="form-control mt-1" placeholder="Название">
							<input name="channel" class="form-control mt-1" placeholder="Канал">
							<input name="images" class="form-control mt-1" placeholder="IMG">
							<button class="btn btn-primary mt-3" type="submit">Добавить в читаемые</button>
						</form>
						<div class="col-4 mt-4">
							<h6>Читаемые</h6>
						</div>

						<div class="row mb-3">
							<div class="col-4">
								<a href=""><img class="w-100 rounded-circle" src="images/1.jpg"></a> <!-- аватарка, внутри ссылки картинка-->
							</div>
							<div class="col-xl-8">
								<div>
									<a href="">LOL KEK</a>  <!-- имя юзера -->
									<span style="font-size: 12px;"> @lolkek </span> <!--название аккаунта-->
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-4">
								<a href=""><img class="w-100 rounded-circle" src="images/2.jpg"></a> <!-- аватарка, внутри ссылки картинка-->
							</div>
							<div class="col-xl-8">
								<div>
									<a href="">CHEBUREK</a>  <!-- имя юзера -->
									<span style="font-size: 12px;"> @CHEBUREK </span> <!--название аккаунта-->
								</div>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-4">
								<a href=""><?php echo "<img src='".$_GET["images"]."' class ='w-100 rounded-circle'>"  ?></a> <!-- аватарка, внутри ссылки картинка-->
							</div>
							<div class="col-xl-8">
								<div>
									<a href=""><?php echo $_GET["name"] ?></a>  <!-- имя юзера -->
									<span style="font-size: 12px;"> <?php echo $_GET["channel"] ?></span> <!--название аккаунта-->
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3">
						<div >
							© Twitter, 2018
							<a href="">О нас</a>
							<a href="">Справочный центр</a>
							<a href="">Условия</a>
							<a href="">Политика конфиденциальности</a>
							<a href="">Файлы cookie</a>
							<a href="">О рекламе</a>
							<a href="">Бренд</a>
							<a href="">Блог</a>
							<a href="">Состояние</a>
							<a href="">Приложения</a>
							<a href="">Вакансии</a>
							<a href="">Маркетинг</a>
							<a href="">Компаниям</a>
							<a href="">Разработчикам</a>
						</div>
						<div class="d-flex">
							<a href="">Рекламируйте вместе с Твиттером</a>
						</div>
					</div>
		</div>
	</div>
</body>
</html>