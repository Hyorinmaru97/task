
<?php
$data = $_POST;

if(isset($data['send']))
{
	//выполнение условия, если поле ФИО и поле номер телефона будут пустыми - выдать ошибку. 
	$errors = array();
	if($data['fio'] == '')
	{
		$errors[] = 'Введите ФИО';
	}
	if($data['phone_number'] == '')
	{
		$errors[] = 'Введите телефон';
	}
	if($data['email'] !=='')
	{
		// Условие для почты, если при вводе домена будет использован домен @gmail.com - выдать ошибку.
		$pos = strpos($data['email'], "@gmail.com");
		if ($pos !== false) {
	     	$errors[] ="Регистрация пользователей с таким почтовым адресом невозможна";
		} 	
	}

	if( empty($errors))
		{
			
		} else 
		{
			echo '<div style="color: red;">'.array_shift($errors). '</div><hr>';
		}
}
?>
<form action ="/feedback.php" method ="POST">
	<p>
		<p><string>Добавьте комментарий: </string></p>
		<textarea name="comment" rows ="5" cols ="40" position ="fixed"></textarea>
	</p>
	<p>
		<p><string>Введите ФИО: </string></p>
		<input type ="text" name ="fio" value ="<?php echo @$data['fio'];?>"></input>
	</p>
	<p>
		<p><string>Укажите Ваш адрес: </string></p>
		<input type ="text" name ="adres"></input>
	</p>
	<p>
		<p><string>Введите e-mail: </string></p>
		<input type ="email" name ="email"  title ="Введите корректный email" value ="<?php echo @$data['email'];?>"></input>
	</p>
	<p>
		<p><string>Введите Ваш номер телефона: </string></p>
<!--ограничение в виде паттерна, которое обязывает человека писать в поле для номера телефона только цифры. -->
		<input type ="text"  name ="phone_number"  pattern="[+]{0,1}[1-9]{1}[0-9]{10}" title ="Использовать можно только цифры" value ="<?php echo @$data['phone_number'];?>"></input>
	</p>
	<p>
		<p><string>Прикрепите файл: </string></p>
		<input type ="text" name ="file"></input>
	</p>
<p>
	<button type ="submit" name ="send">Отправить</button>
</p>
</form>
