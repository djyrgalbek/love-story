<!DOCTYPE html>
<html>
    <head>
        <title>Love Story | Application form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=width-device, initial-scale=1">
        <meta name="Keywords" content="Fill out the online Love story questionnaire, fill out a questionnaire, fill out a marriage agency application form, fill out a marriage agency application form in Bishkek, online application form, online marriage profile, online Love Story marriage profile, agencies of Bishkek">
        <meta name="description" content="Thanks to our online questionnaire, We will pick you up the person you have been looking for all this time.">
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
    'Application from the client',
    '<html><body>
	<img src="https://www.motto.net.ua/pic/201209/2560x1440/motto.net.ua-11701.jpg" width="100%" height="auto" alt="Рисунок">
	<h3 align="center"><b>Customer</b></h3>
	
	<p><b>Name: </b>'.$name_anketa.'<br>
	<b>Client sex: </b>'.$pol_anketa.'<br>
	<b>E-mail: </b>'.$mail_anketa.'<br>
	<b>Phone: </b>'.$phone_anketa.'<br>
	<b>About me: </b>'.$about_me.'<br>
	<b>I am looking for: </b>'.$search.'</p><br>
	</body></html>',
    "From: Nurgiza@l0ve-story.ru\r\n"
    ."Content-type: text/html; charset=utf-8\r\n"
    ."X-Mailer: PHP mail script");
echo "Message sent successfully."; 
			echo '<script>document.location.href="index_en.php";
			alert("Your message has been sent!");
			</script>';
			}
		?>
 </head>
    <body>
			<style>

			</style>
		<header>
			<a href="index_en.php" target="_self"><p class="back">Come back</p></a>
			<a href="index_en.php" target="_self"><div class="Love_story_font" style="float:right;"></div></a>
		</header>
				<img src="/images/anketa_pic.jpg" alt="Profile of the marriage agency Love - Story" width="100%" height="auto">
			<div class="about_us_block">
				<h1 class="about">Application form</h1>
				<p class="us" align="center">Following the questionnaire, we will pick up the second half, while you are at home drinking tea))).				 
				</p>
			<form name="anketa_form" action="anketa_en.php" method="POST">
			<legend align="left">Your full name</legend>
			<input id="name_anketa" name="name_anketa" type="text" value="" placeholder="Your full name" class="anketa_form">
			<legend>What's your gender</legend>
			<input id="pol_anketa" name="pol_anketa" type="text" value="" placeholder="What's your gende" class="anketa_form"><br>
			<legend>Your e-mail address</legend>
			<input id="mail_anketa" name="mail_anketa" type="text" value="" placeholder="Your e-mail address" class="anketa_form"><br>
			<legend>Your phone number</legend>
			<input id="phone_anketa" name="phone_anketa" type="text" value="" placeholder="Your phone number" class="anketa_form"><br>
			<legend>About myself</legend>
			<textarea id="about_me" name="about_me"  style="resize:none; height:100px; font-size:16px;" wrap="soft" maxlength="500" placeholder="About myself" class="anketa_form"></textarea><br>
			<legend>Looking for</legend>
			<textarea id="search" name="search"  style="resize:none; height:100px; font-size:16px;" wrap="soft" maxlength="500" placeholder="Looking for" class="anketa_form"></textarea ><br>
			
			<div class="anketa_form_button" onClick="otpr_anketa()">Send</div>
			</form>
			</div>

			<?php include 'footer_index_en.php'; ?>
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
						alert("Thank you for your application! We will definitely find you a pair.");
						document.anketa_form.submit();
					}
				}
			</script>
	</body>
</html>