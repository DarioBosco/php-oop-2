<?php

require_once __DIR__ . '/Classes/Product.php';
require_once __DIR__ . '/Classes/Order.php';
require_once __DIR__ . '/Classes/User.php';
//Istanzio due utenti

echo 'test';
$utente1 = new User('Dario', 'Bosco', 'info@example.com', '+39 123 456 789');
$utente2 = new User('Nome', 'Cognome', 'admin@example.com', '+39 987 654 321');

//Istanzio tre prodotti
$product1 = new Product('Product 1', '9.00');
$product2 = new Keyboard('Blackwidow Chroma V3', 129.99, 'Razer', 'IT', 108, 'USB-C');
$product3 = new Mouse('Pro X Superlight Wireless', 129.00, 'Logitech', 'US intl', 86, 'Wireless');

//Istanzio un ordine con due prodotti
$order1 = new Order($utente1, new Keyboard('G915', 120.99, 'Logitech', 'US intl', 86, 'Wireless'), new Keyboard('Blackwidow Chroma V2', 150.99, 'Razer', 'IT', 108, 'USB-C'));

var_dump($product1);
var_dump($product2);
//Mettiamo caso che il nome del prodotto2 cambi nel tempo
//$product2->setPrice(99.99);
var_dump($product2);

var_dump($order1);
