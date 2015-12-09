<?php
 

$komu="mykhaylovanton@gmail.com";
$tema="Заявка Авант-Лизинг";
$text="Пользователь ".$_POST['author']." с номером телефона ".$_POST['phone']." и адресом почты".$_POST['mail']." задал вопрос: ".$_POST['comment']."";
$chek=mail($komu, $tema, $text);
if ($chek){
echo"<br>Спасибо! Ваш вопрос успешно отправлен администратору";
}
else{
echo "error";
}


?>
