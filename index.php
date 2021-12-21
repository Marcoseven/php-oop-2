<?php

/*
Traccia esercitazione. 

Descrizione:
Provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping. 
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure 
diverse tipologie di prodotti. Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...

$c = new CreditCard(..); 
$user->insertCreditCard($c);
*/

require_once __DIR__ . '/Classes/Product.php';
require_once __DIR__ . '/Classes/User_premium.php';

$smathphone = new Product('Samsung', 'Samsung Galaxy A52', 'Android 11 Samsung One UI 3.1', '2x 2.3 GHz Kryo 465 Gold + 6x 1.8 GHz Kryo 465 Silver', 'Snapdragon 720G Qualcomm SM7125', 305);

$client_premium = new User_premium('Marco', 'Caliciotti', 'marco.example@gmail.com', '5191-xxxx-3456-7890', 74 );

echo '<pre>';
var_dump($smathphone, $client_premium);
echo '</pre>';

