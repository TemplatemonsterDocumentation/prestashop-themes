<?php 

$path = dirname($_SERVER['PHP_SELF']);

//$path = 111;

// Variables
$product_name = "Paltirea";
$product_desc = "<span class='ttl'>Paltirea</span>PrestaShopTemplate";
$doc_title = $product_name;

$lang = 'en';
if (isset($_GET['lang'])) {
	$lang = $_GET['lang'];
}

$section_param = 'introduction';
if (isset($_GET['section'])) {
	$section_param = $_GET['section'];
}
if (isset($_GET['utm_campaign'])) {
 header('Location: index.php');
}