<!DOCTYPE html>
<html>
    <head>
        <title>Love Story | Анкета</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=width-device, initial-scale=1">
        <meta name="Keywords" content="Заполнить анкету онлайн Love story, заполнить анкету, заполнить анкету брачного агенства, заполнить анкету брачного агенства в Бишкеке, анкета онлайн, анкета онлайн брачное агенство, анкета онлайн брачное агенство Love Story, заполнить онлайн анкету брачного агенства Бишкек"> 
        <meta name="description" content="Благодаря нашей онлайн анкете, Мы Вам подберем Вам того самого человека, которого Вы так долго искали всё это время.">
        <link rel="stylesheet" type="text/css" href="style/style.css">
    	<script type="text/javascript" src="js/jquery-321js-1.js"></script>
        <script type="text/javascript" src="js/javascript.js"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Oswald|Shrikhand" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Fjalla+One|Galada|Open+Sans+Condensed:300|Oswald|Shrikhand" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Dancing+Script|Fjalla+One|Galada|Open+Sans+Condensed:300|Oswald|Shrikhand" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Narrow|Fjalla+One|Teko" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Anton|Bangers|Cabin+Sketch|Encode+Sans+Condensed|Fjalla+One|Francois+One|Markazi+Text|Roboto+Condensed|Russo+One|Vidaloka" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Galada|PT+Sans+Narrow" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Galada|PT+Sans+Narrow" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Acme|Alegreya+SC|Amatic+SC|Galada|Marmelad|Nixie+One|PT+Sans+Narrow|Share+Tech" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Bangers|Black+Ops+One|Great+Vibes|Sacramento" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
		
		<?php 
			$name_anketa = $_POST['name_anketa'];
			$pol_anketa = $_POST['pol_anketa'];
			$mail_anketa = $_POST['mail_anketa'];
			$phone_anketa = $_POST['phone_anketa'];
			$about_me = $_POST['about_me'];
			$search = $_POST['search'];
			
			if($mail_anketa!=""){ 
			mail(
    't.jyrgal@mail.ru, Love-story888@mail.ru, Nurgiza@l0ve-story.ru',
    'Заявка от клиента Love - Story',
    '<html><body>
	<img src="https://www.motto.net.ua/pic/201209/2560x1440/motto.net.ua-11701.jpg" width="100%" height="auto" alt="Рисунок">
	<h3 align="center"><b>Анкета</b></h3>
	
	<p><b>Имя: </b>'.$name_anketa.'<br>
	<b>Пол: </b>'.$pol_anketa.'<br>
	<b>Почта: </b>'.$mail_anketa.'<br>
	<b>Телефон: </b>'.$phone_anketa.'<br>
	<b>Обо мне: </b>'.$about_me.'<br>
	<b>Я ищу: </b>'.$search.'</p><br>
	</body></html>',
    "From: Nurgiza@l0ve-story.ru\r\n"
    ."Content-type: text/html; charset=utf-8\r\n"
    ."X-Mailer: PHP mail script");
echo "Сообщение успешно отправлено."; 
			echo '<script>document.location.href="index.php";
			alert("Ваше сообщение отправлено!");
			</script>';
			}
		?>
 </head>
    <body>
			<style>

			</style>
		<header>
			<a href="index.php" target="_self"><p class="back">Вернуться назад</p></a>
			<a href="index.php" target="_self"><div class="Love_story_font" style="float:right;"></div></a>
		</header>
				<img src="/images/anketa_pic.jpg" alt="Анкета брачного агенства Love - Story" width="100%" height="auto">
			<div class="about_us_block">
				<h1 class="about">Анкета</h1>
				<p class="us" align="center">Блогодаря анкете мы вам подберем второю половинку, пока вы дома пьете чай))).				 
				</p>
			<form name="anketa_form" action="anketa.php" method="POST">
			<legend align="left">Ваше ФИО</legend>
			<input id="name_anketa" name="name_anketa" type="text" value="" placeholder="Ваше ФИО" class="anketa_form">
			<legend>Ваш пол</legend>
			<input id="pol_anketa" name="pol_anketa" type="text" value="" placeholder="Ваш пол" class="anketa_form"><br>
			<legend>Ваш e-mail</legend>
			<input id="mail_anketa" name="mail_anketa" type="text" value="" placeholder="Ваш e-mail" class="anketa_form"><br>
			<legend>Ваш телефон</legend>
			<input id="phone_anketa" name="phone_anketa" type="text" value="" placeholder="Ваш телефон" class="anketa_form"><br>
			<legend>О себе</legend>
			<textarea id="about_me" name="about_me"  style="resize:none; height:100px; font-size:16px;" wrap="soft" maxlength="500" placeholder="О себе" class="anketa_form"></textarea><br>
			<legend>Ищу</legend>
			<textarea id="search" name="search"  style="resize:none; height:100px; font-size:16px;" wrap="soft" maxlength="500" placeholder="Ищу" class="anketa_form"></textarea ><br>
			
			<div class="anketa_form_button" onClick="otpr_anketa()">Отправить</div>
			</form>
			</div>

			<?php include 'footer_index.php'; ?>
			<script>
				function otpr_anketa(){
					var name_anketa = document.anketa_form.name_anketa;
					var pol_anketa = document.anketa_form.pol_anketa;
					var mail_anketa = document.anketa_form.mail_anketa;
					var phone_anketa = document.anketa_form.phone_anketa;
					var about_me = document.anketa_form.about_me;
					var search = document.anketa_form.search;
					
					if(name_anketa.value==""){
						name_anketa.style.borderColor="#af1919";
					}
					else{
						name_anketa.style.borderColor="#434841";
					}
					
					if(pol_anketa.value==""){
						pol_anketa.style.borderColor="#af1919";
					}
					else{
						pol_anketa.style.borderColor="#434841";
					}
					
					if(mail_anketa.value==""){
						mail_anketa.style.borderColor="#af1919";
					}
					else{
						mail_anketa.style.borderColor="#434841";
					}
					
					if(phone_anketa.value==""){
						phone_anketa.style.borderColor="#af1919";
					}
					else{
						phone_anketa.style.borderColor="#434841";
					}
					
					if(about_me.value==""){
						about_me.style.borderColor="#af1919";
					}	
					else{
						about_me.style.borderColor="#434841";
					}
					
					if(search.value==""){
						search.style.borderColor="#af1919";
					}
					else{
						search.style.borderColor="#434841";
					}

					if(name_anketa.value!=""&&pol_anketa.value!=""&&mail_anketa.value!=""&&phone_anketa.value!=""&&about_me.value!=""&&search.value!=""){
						alert("Спасибо за заявку! Мы обязательно найдем вам пару.");
						document.anketa_form.submit();
					}
				}
			</script>
	</body>
</html>