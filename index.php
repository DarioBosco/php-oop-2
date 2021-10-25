<?php

require_once __DIR__ . '/Classes/Product.php';
require_once __DIR__ . '/Classes/Order.php';
require_once __DIR__ . '/Classes/User.php';
require_once __DIR__ . '/Products/Mouse.php';
require_once __DIR__ . '/Products/Keyboard.php';

//Istanzio due utenti, uno con un indirizzo ed uno senza
$utente1 = new User('Dario', 'Bosco', 'info@example.com', '+39 123 456 789');
$utente2 = new User('Nome', 'Cognome', 'admin@example.com', '+39 987 654 321', new Address('C.so Venezia', 21, 'Milano', 22100, 'Italia'));
echo 'Utenti:';
var_dump($utente1);
var_dump($utente2);
echo 'Richiedo il paese del secondo utente:' . "<br>";
echo $utente2->address->getCountry();
echo '<hr>';

//Istanzio tre prodotti
$product1 = new Product('Prodotto Base', '9.00', 'Microsoft');
$product2 = new Keyboard('Blackwidow Chroma V3', 129.99, 'Razer', 'IT', 108, 'USB-C');
$product3 = new Mouse('Pro X Superlight Wireless', 129.00, 'Logitech', 12_000, 28, 'Wireless');
echo 'Prodotti:';
var_dump($product1);
var_dump($product2);
var_dump($product3);
echo '<hr>';

//Istanzio un ordine con due prodotti
$order1 = new Order($utente1, $product1, $product2);
echo 'Ordine 1:';
var_dump($order1);
echo '<hr>';

//Mettiamo caso che il nome del prodotto2 cambi nel tempo
echo 'Cambio il prezzo del secondo prodotto:' . '<br>';
echo 'Vecchio prezzo: ' . $product2->getPrice() . '<br>';
$product2->setPrice(99.99);
echo 'Nuovo prezzo: ' . $product2->getPrice() . '<br>';
echo '<hr>';

//Adesso cerchiamo di impostare il prezzo come stringa, il quale andra' a causare un'eccezione.
echo 'Tento di impostare un valore non valido:' . '<br>';
try {
	$product2->setPrice('Nuovo prezzo: 79.99');
} catch (\Exception $e) {
	echo 'Eccezione: ' . $e->getMessage();
}
echo '<hr>';
