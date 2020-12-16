<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg-light">


	<!-- навигация -->
	<div class="header border-bottom pb-2">
		<div class="container">
			<div class="row">
				<!-- главная, уведомления, сообщения  -->
				<div class="col-4">
					<div class="row">
						<div class="col-4">
							<img src="images/icons8-home-50.png" class="w-25">
							<p><a href="">Домой</a></p>
						</div>
						<div class="col-4">
							<img src="images/icons8-notification-50.png" class="w-25">
							<a href="">Уведомления</a>
						</div>
						<div class="col-4">
							<img src="images/icons8-new-post-50.png" class="w-25">
							<a href="">Сообщения</a>
						</div>
					</div>
				</div>
				<!-- logo -->
				<div class="col-3 text-right ">
					<img class="w-25" src="images/icons8-twitter-50.png" >
				</div>
				<!-- поиск и профиль -->
				<div class="col-4">
					
				</div>
			</div>
		</div>
	</div>

	<!-- див с контентом-->
	<div class="main mt-3">
		<div class="container">
			<div class="row">
				<!-- левая колонка -->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- Описание профиля -->
					<div class=" bg-white">
						<!--фон-->
						<a href=""><img src="images/background.jpg" class="img-fluid"></a>
						<!--карточка-->
						<div class="row">
							<div class="col-4">
								<a href=""><img src="images/avatar.jpg" class="rounded-circle"></a>
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


					<div class="bg-white mt-4 pt-3 pb-3 pl-3 pr-3" >
						<div class="d-flex">
							<h6>Актуальные темы для вас</h6>
						</div>
						
						<div>
							<a href=""></a>
						</div>
					
					</div>
				</div>

				<!-- Средняя колонка: Лента твитов: добавить, твиты -->
				<div class="col-sm-12 col-md-8 col-xl-6" style="">
					<div class="pt-2 bg-white">
						<!-- form, texarea, button -->
						<div class="row">
							<!-- avatar -->
							<div class="col-2">
								<img src="images/avatar.jpg" class="rounded-circle">
							</div>
							<!-- input, button -->
							<div class="col-10">
								<form method="GET" action="insert.php">
									<div class="col-12">
										<input name="author" type="text" class="form-control" placeholder="Автор">
										<textarea name="post" class="form-control" placeholder="Что нового?"></textarea>
									</div>
									<div class="col-12">
										<div class="row">
											<div class="col-8">
												<a href="" class=""><img src="images/picture.png"></a>
												<a href="" class="ml-2"><img src="images/gif.png"></a>
												<a href="" class="ml-2"><img src="images/graph.png"></a>
												<a href="" class="ml-2"><img src="images/placeholder.png"></a>
											</div>
											<div class="col-4">
												<button type="submit" class="btn btn-primary">Твитнуть</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					
						<!-- пост 1-->
						<div class="row mt-4">
							<!-- account_image -->
							<div class="col-2">
								<a href=""></a>
							</div>
							<div class="col-10">
								<!-- account_name, account_link -->
								<div>
									<h5><a href="#" class="text-dark"></a></h5>
					
								</div>
								<!-- post_text -->
								<div>
									
								</div>
								<!-- post_image -->
								<div>
									
								</div>
								<!-- panel: comment, like, message, repost -->
								<div class="d-flex">
									<div class="col-xl-3">
										<a href=""><img src="images/comment.png"></a>
									</div>
									<div class="col-xl-3">
										<a href=""><img src="images/retweet.png"></a>
									</div>
									<div class="col-xl-3">
										<a href=""><img src="images/like.png"></a>
									</div>
									<div class="col-xl-3">
										<a href=""><img src="images/envelope.png"></a>
									</div>
								</div>
							</div>
						</div>					
					
					</div>
				</div>


				<!-- правая колонка -->
				<div class="col-sm-12 col-md-4 col-xl-3">
					<!-- "Читаемые" -->
					<div class="bg-white pt-3 pb-3 pl-3 pr-3">
						<!-- форму создать здесь -->
						<div class="col-4">
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

					</div>
					<!-- Ссылки © Twitter, 2018 -->
					
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
		</div>
	</div>
</body>
</html>