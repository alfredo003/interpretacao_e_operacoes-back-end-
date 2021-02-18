<?php
require __DIR__. "/html.php";

//require __DIR__. "/source/Loading/User.php";
//require __DIR__. "/source/Loading/Address.php";
//require __DIR__. "/source/Loading/Company.php";

require __DIR__. "/source/autoload.php";



echo "<p class='default'>__construct</p>";
$user = new \Source\Intepretation\User("Alfrdo","Manuel","alfredo@gmail.com");
var_dump(
    $user
);
echo "<p class='default'>__clone</p>";

$alfredo003 = $user;
$manuel = $alfredo003;
$manuel->setFirstName("Fernando");
$manuel->setLastName("Nadia");
$manuel->setEmail("alfredo@d.vv");

$fernando = clone $user;
$cleidy = clone $manuel;
var_dump(
 $manuel,
 $fernando,
 $cleidy
);