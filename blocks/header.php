<?
include("db.php");
$GetInfo = mysql_query("SELECT * FROM about WHERE id='1'");
$GetInfoR = mysql_fetch_array($GetInfo);
?>
<header class="nav-menu fixed-top">
<!--<div style="width:100%; height:50px; background:#a9a9a9;color: white;padding-top: 5px;">
       <span style="padding-left:20px; padding-right:20px;"><img src="http://pngimg.com/uploads/viber/viber_PNG25.png" style="width:1%;"> Viber: <a href="viber://chat?number="></a></span>
	  <span style="padding-left:20px; padding-right:20px;"><img src="http://www.stickpng.com/assets/images/580b57fcd9996e24bc43c543.png" style="width:1%;"> Whatsapp: <a href="whatsapp://send?number="></a></span>
	  <span style="padding-left:20px; padding-right:20px;"><i class="icon icon-xs fa fa-envelope-o" aria-hidden="true"></i> Почта: <a href="mailto:"></a></span>
	  <span style="padding-left:20px; padding-right:20px;"><a href="https://m.vk.com/club160794181"><img src="http://avtodortex.ru/userfiles/VK.png" style="width:38px;"></a></span>
	<span style="padding-left:20px; padding-right:20px;"><a href="https://ok.ru/profile/585176235286"><img src="http://decorshow.su/images/ok_logo_sign_white.png" style="width:38px;"></a></span>
    </div>-->
	
 <nav class="navbar normal" style="background-color:white;">
  <div class="container-fluid">
   <div class="navbar-header">
    <a class="navbar-brand" href="index.php">
      <div class="mold-logo">
        <img src="logo.png"/>
		
      </div>
	  
      <!-- <img src="assets/img/logo.png" alt=""> -->
    </a>
	
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

  <div class="navbar-collapse collapse" id="main-navbar">
     <ul class="nav navbar-nav">
	 <li>
		<a href="#"><i class="fa fa-phone" style="color:red;"></i><b style="color:red;">+995597039122</b></a>
	  </li>
   <li>
    <a href="index.php">Главная</a>
  </li>
  
  <li><a href="about.php?id=4">Трансферы</a></li>
  <li class="dropdown submenu">
    <a href="#">Наши туры</a>
	<ul class="dropdown-menu" style="width:auto;">
	  <li><a href="tours.php?id=2">Индивидуальные Туры</a></li>
	  <li><a href="tours.php?id=11">Групповые туры</a></li>
      <li><a href="tours.php?id=1">Паломнические туры</a></li>
	  <li><a href="tours.php?id=4">Туры Грузия-Армения-Азербайджан</a></li>
	  <li><a href="tours.php?id=10">Школьные туры</a></li>
	  
    </ul>
  </li>
  <li>
    <a href="tours.php?id=3">Экскурсии</a>
  </li>
  <li class="dropdown submenu">
    <a href="#">Грузия</a>
	<ul class="dropdown-menu">
      <li><a href="georgia.php?id=1">О Стране</a></li>
	  <li><a href="georgia.php?id=2">Регионы</a></li>
	  <li><a href="georgia.php?id=3">Памятка туристу</a></li>
    </ul>
  </li>
  <li class="dropdown submenu">
    <a href="#">О компании</a>
	<ul class="dropdown-menu">
      <li><a href="about.php?id=1">О Нас</a></li>
	  <li><a href="about.php?id=2">Наши Сотрудники</a></li>
	  <li><a href="about.php?id=3">Наш Автопарк</a></li>
	  <li>
    <a href="blog.php">Наш Блог</a>
  </li>
	  <li><a href="about.php?id=5">Наши Партнеры</a></li>
	  <li><a href="about.php?id=6">Отзывы</a></li>
	  <li><a href="about.php?id=7">Наши Гости</a></li>
    </ul>
  </li>
   <li>
    <a href="contact.php">Контакты</a>
  </li>

</ul> 
  </div>
</div>
</nav>
</header>