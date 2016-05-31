<?php
/*
 * Template Name: Contact Page
 */
?>

<?php get_header(); ?>

<div class="page-content">

	<div class="show-side-menu-btn"></div>

	<?php

		$defaults = array(
			'container' => false,
			'theme_location' => 'contact-page-side-menu',
			'menu_class' => 'side-menu'
		);

		wp_nav_menu($defaults);

	?>

	<h1><?php the_title(); ?></h1>

	<div id="googleMap"></div>

	<h4>Адреса</h4>

	<p>
		Кімната 315<br>
	    Корпус 1<br>
	    вул. Сковороди, 2<br>
	    04655<br>
	    Київ, Україна
	</p>

	<h4>Декан</h4>

	<p>
		Микола Миколайович Глибовець <br>
		Доктор фізико-математичних наук, професор <br>
		Корпус 1 <br>
		Кімната 302 <br>
		+38 (044) 463 69 85 <br>
		Офісні години: <br>
		Понеділок: 11:00 – 13:00, 14:30 – 16:30 <br>
		Четвер: 09:00 – 11:00
	</p>

	<h4>Заступник декана</h4>

	<p>
		Андрій Олександрович Афонін <br>
		Cтарший викладач <br>
		Корпус 2 <br>
		Кімната 215 <br>
		+38 (044) 425 60 64
	</p>

	<h4>Методисти</h4>

	<p>
		Валентина Петрівна Конюшенко <br>
		Людмила Володимирівна Докіль <br>
		Корпус 1 <br>
		Кімната 315 <br>
		+38 (044) 425 60 64
	</p>

	<h1 id="campus">Мапа кампусу</h1>

	<img src="http://fin.ukma.edu.ua/wp-content/uploads/2016/05/campus_map.jpg" alt="Мапа кампусу"/>

	<h1 id="committee">Контакти приймальної комісії</h1>

	<h4>Адреса приймальної комісії (їхати ст. метро "Контрактова площа")</h4>
 
	<p>
	   вул. Набережно-Хрещатицька, 27, кімн. 2 (будівля № 9 на схемі)<br>
	   e-mail:  ukma@ukma.kiev.ua<br>
	   тел. +38 (044) 425-60-22,<br>
	   +38 (044) 425-54-17
	</p>

	<h4>Прийом документів для вступу до Національного університету "Києво-Могилянська академія"</h4>

	<p>
	   вул. Іллінська, 9, 2 поверх Культурно-мистецького  центру НаУКМА<br>
	   (ст. метро "Контрактова площа", будівля №4а на схемі, вхід з вул. Іллінська)<br><br>
	   
	   За розкладом:<br>
	   Пн.-Пт.: 9.00 - 17.00. Обідня перерва: 13.00 - 14.00.<br>
	   Сб.: 10.00 - 14.00.
	</p>

	<h1 id="employment">Відділ працевлаштування</h1>

	<p>Відділ працевлаштування</p>

	<h1 id="employment-link">Посилання на фірми працедавців</h1>

	<p>Посилання на фірми працедавців</p>

	<h1 id="pr">Відділ PR</h1>

	<p>Відділ PR</p>

	<h1 id="media">Контакти відділу по роботі зі ЗМІ</h1>

	<p>Контакти відділу по роботі зі ЗМІ</p>

	<h1 id="faq">FAQ</h1>

	<p>FAQ</p>


</div>

<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyAajMGMY3ktImXJw8HuxkCBzcRMk6QCDBc"></script>

<script type="text/javascript">
	
	function initialize() {

    var myLatLng = {lat: 50.464016, lng: 30.519948};

    var mapProp = {
      center: new google.maps.LatLng(50.464016, 30.519948),
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);  

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Національний університет "Києво-Могилянська академія"'
    });
    marker.setMap(map);

  }

  google.maps.event.addDomListener(window, 'load', initialize);

</script>

<?php get_footer(); ?>