<?php
   $login = filter_var(trim($_POST['signInLogin']), FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['signInPass']), FILTER_SANITIZE_STRING);
   $pass = md5($pass.'efkrorloglr123');
   $mysql = new mysqli('localhost', 'root', 'root', 'test');
   
   $mysql->query("INSERT INTO `users` (`login`, `name` ,`pass`) VALUES('$login', '$name', '$pass')");
   
   $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

   $user = $result->fetch_assoc();

   if(count($user) == 0){
      echo "user no found";
      exit();
   }

   // print_r($user);

   $mysql->close();
   header('location: /site')
?>