<?php
include_once "User.php";
$user1 = new User("Duc","Duc@gmail.com",1);
$user2 = new User("Duc","Duc@gmail.com",2);

echo $user1->getInfo().". ";
echo $user1->isAdmin()."<br>";
echo $user2->getInfo().". ";
echo $user2->isAdmin();
