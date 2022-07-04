<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?
    use Bitrix\Main\Page\Asset;
    // Подключение JS

    //dd(SITE_TEMPLATE_PATH);

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/bootstrap.js');
    // Подключение CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><? $APPLICATION->ShowTitle(); ?></title>
</head>
<body>

