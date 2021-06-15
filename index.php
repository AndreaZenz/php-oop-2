<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online;
ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c); 
-->


<?php


require_once("./classes/products.php");
require_once("./classes/tablet.php");
require_once("./classes/users.php");
require_once("./classes/usersPaymentClass.php");


$user1 = new User("andrea", "soLillo@tiscali.it", "20", "creditCard");
$paymentClass = new SubscriptedUser("andrea", "soLillo@tiscali.it", "20", "creditCard", "premium");

echo $user1 -> renderUser();
// echo $paymentClass -> renderUser();
