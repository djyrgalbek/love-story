                         <footer id="contact_footer">
				<div>
					<p style="font-size:14px; color:#fff;">Контактные данные</p>
					<p>Тел.: <a href="tel:+996771193280" target="_self" title="Нажмите, чтобы позвонить.">+996(507)001014</a></p>
					<p>Почта: <a href="mailto:Love-story888@mail.ru" target="_self" title="Нажмите, чтобы отправить на почту">Love-story888@mail.ru</a></p><br>
					<a href="https://ru-ru.facebook.com/nurgiza.seidekmatova.9" target="_blank"> <img id="facebook" src="images\contact\facebook_inactive.png" width="30px" height="auto" onmouseover='S_network_on("facebook_active")' onmouseout='S_network_off("facebook_inactive")'></a>
					<a href="https://www.ok.ru/profile/560709973141" target="_blank"> <img id="ok" src="images\contact\ok_inactive.png" width="30px" height="auto" onmouseover='S_network_on("ok_active")' onmouseout='S_network_off("ok_inactive")'></a>
					<a href="https://vk.com/lovestory188" target="_blank"> <img id="vk" src="images\contact\vk_inactive.png" width="30px" height="auto" onmouseover='S_network_on("vk_active")' onmouseout='S_network_off("vk_inactive")'></a>
					<a href="https://www.instagram.com/story648/?hl=ru" target="_blank"><img id="instagram" src="images\contact\instagram_inactive.png" width="30px" height="auto" onmouseover='S_network_on("instagram_active")' onmouseout='S_network_off("instagram_inactive")'></a>
					<a href="https://wa.me/821077339107?text=Саламатсызбы!%20Я%20по%20поводу%20брачного%20агенства." target="_blank"> <img id="whatsapp" src="images\contact\whatsapp_inactive.png" width="30px" height="auto" onmouseover='S_network_on("whatsapp_active")' onmouseout='S_network_off("whatsapp_inactive")'></a>
				</div>
				
				<div>
					<p style="font-size:14px; color:#fff;">Навигация</p>
					<p><a href="index.php" target="_self">Главная</a></p>
					<p></p>
				</div>
				
				<div>
					<p style="font-size:14px; color:#fff;">О сайте</p>
					<p>Love Story 2018 Copyright.<br>Все права защищены.</p>
					<p>Разработчик: <a href="mailto:t.jyrgal@mail.ru?subject=Вопрос с сайта&body=Здравствуйте, web-мастер"" target="_self">Тургунбаев Ж.</a></p>
				</div>
				
			</footer>
			
			<script>
				function S_network_on(arg_active){
					var s_n_icon="images/contact/"+arg_active+".png";
					if(arg_active=="vk_active"){
						document.getElementById("vk").src=s_n_icon;
					}
					else if(arg_active=="facebook_active"){
						document.getElementById("facebook").src=s_n_icon;
					}
					else if(arg_active=="ok_active"){
						document.getElementById("ok").src=s_n_icon;
					}
					else if(arg_active=="instagram_active"){
						document.getElementById("instagram").src=s_n_icon;
					}
					else if(arg_active=="whatsapp_active"){
						document.getElementById("whatsapp").src=s_n_icon;
					}
				}
				
					function S_network_off(arg_inactive){
					var s_n_icon="images/contact/"+arg_inactive+".png";
					if(arg_inactive=="vk_inactive"){
						document.getElementById("vk").src=s_n_icon;
					}
					else if(arg_inactive=="facebook_inactive"){
						document.getElementById("facebook").src=s_n_icon;
					}
					else if(arg_inactive=="ok_inactive"){
						document.getElementById("ok").src=s_n_icon;
					}
					else if(arg_inactive=="instagram_inactive"){
						document.getElementById("instagram").src=s_n_icon;
					}
					else if(arg_inactive=="whatsapp_inactive"){
						document.getElementById("whatsapp").src=s_n_icon;
					}
				}
			</script>	