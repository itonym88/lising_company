<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<link href="style.css" rel="stylesheet" media="all" />
</head>
<body>
<div id="container">
<div id="header">
<img src="images/header.png">

<a href="send.php"><img id="send" src="images/send.png"></a>

</div>
<div id="menu">
	<ul>
		<li><a href="home.php"><span>Главная</span></a></li>
		<li><a href="#"><span>В лизинг</span></a></li>
		<li><a href="#"><span>Калькулятор</span></a></li>
		<li><a href="#"><span>Документы</span></a></li>
		<li><a href="#"><span>Контакты</span></a></li>								
	</ul>
</div>


<div id="main">

<h2>Заказ на получение лизинговых услуг</h2>
<img src="images/hr1.png">
<div class="send_form">
<form id="text-form" action="index.php" method="post" name="sendform" >
<div class="a"><p> Имя Фамилия<input type="text" name="author" value="" size="25" /></p></div>
<div class="a1"><p>Контактный телефон<input type="text" name="phone" value="" size="25" /></p></div>
<div class="a1"><p>E-Mail<input type="text" name="mail" value="" size="25" /></p></div>
<div class="a2"><p><small> Информация о предмете лизинга</small></p>
<p><textarea  name="comment" > </textarea></p></div>
<input name="button" type="submit" id="submit" value="Отправить" />
</form>
</div>

</div>

<div id="board_right">
 <div class="search">
     <input type="search" name="q">
     <input type="submit" value="">
   </div>

<div id="news">
<div id="news_line">
<h3>Наши новости</h2> 
</div>
</div>

<div id="social">
<a href=""><img class="soc" src="images/seti_g.png"></a>
<a href=""><img class="soc" src="images/seti_o.png"></a>
<a href=""><img class="soc" src="images/seti_t.png"></a>
<a href=""><img class="soc" src="images/seti_vk.png"></a>
<a href=""><img class="soc" src="images/seti_f.png"></a>
</div>
</div>



<div id="footer">
<hr>
<p>testing project for lising company</p>
</div>

</div>
</body>
</html>
