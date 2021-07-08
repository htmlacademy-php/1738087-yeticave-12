<?php
require('helpers.php');
require('functions.php');


$is_auth = rand(0, 1);

$user_name = 'Егор'; // укажите здесь ваше имя

$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];
$product_inf = [
	0 =>	['name' => '2014 Rossignol District Snowboard', 'categorie' => 'Доски и лыжи', 'Cost' => '1000', 'URL' => ' img/lot-1.jpg'],
	1 => ['name' => 'DC Ply Mens 2016/2017 Snowboard', 'categorie' => 'Доски и лыжи', 'Cost' => '159999', 'URL' => ' img/lot-2.jpg'],
	2 => ['name' => 'Крепления Union Contact Pro 2015 года размер L/XL', 'categorie' => 'Крепления', 'Cost' => '8000', 'URL' => ' img/lot-3.jpg'],
	3 => ['name' => 'Ботинки для сноуборда DC Mutiny Charocal', 'categorie' => 'Ботинки', 'Cost' => '10999', 'URL' => ' img/lot-4.jpg'],
	4 => ['name' => 'Куртка для сноуборда DC Mutiny Charocal', 'categorie' => 'Одежда', 'Cost' => '7500', 'URL' => ' img/lot-5.jpg'],
	5 => ['name' => 'Маска Oakley Canopy', 'categorie' => ' Разное', 'Cost' => '5400', 'URL' => ' img/lot-6.jpg'],
];


// двумерный массив с гифками

// HTML-код главной страницы
$page_content = include_template('main.php', ['product_inf' => $product_inf, 'categories' => $categories, ]);

// окончательный HTML-код
$layout_content = include_template('layout.php', ['content' => $page_content, 'title' => 'Yeticave','categories' => $categories,'is_auth' => $is_auth, 'user_name' => $user_name]);

print($layout_content);
