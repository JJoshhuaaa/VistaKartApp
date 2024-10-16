<?php
// Simplified language handler since other methods are dumb

// Set default language Dutch
$selectedLang = "nl";


// Check whether a language is already stored in cookies
if(isset($_COOKIE['lang'])) 
{
    $selectedLang = $_COOKIE['lang'];
}

// Get language packs
$jsonLanguagePacks = file_get_contents('lang.json'); 

if ($jsonLanguagePacks === false) {
    die('Error reading the JSON file');
}

// Decode into array type
$decodedLanguagePacks = json_decode($jsonLanguagePacks, true); 

if ($decodedLanguagePacks === null) {
    die('Error decoding the JSON file');
}

// Revert to fallback language (nl)
if (!isset($decodedLanguagePacks[$selectedLang])) {
    $selectedLang = "nl";
}

// Language specific data
$languagePack = $decodedLanguagePacks[$selectedLang];

$pageName = explode('.',basename($_SERVER['PHP_SELF']))[0];

// Langauge specific + Page specific data
$languagePackPage= $languagePack[$pageName];

?>