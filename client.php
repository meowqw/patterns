<?php

namespace Neetqw\Patterns\FactoryMethod;
use Neetqw\Patterns\Adapter\JsonData;
use Neetqw\Patterns\Adapter\XmlData;
use Neetqw\Patterns\Adapter\XmlReader;
use Neetqw\Patterns\Builder\InfoNotificationBuilder;
use Neetqw\Patterns\Composite\Ingredient;
use Neetqw\Patterns\Composite\Order;
use Neetqw\Patterns\Composite\Product;
use Neetqw\Patterns\Decorator\ReversTestFormatter;
use Neetqw\Patterns\Decorator\TextInput;
use Neetqw\Patterns\Singleton\Config;

require_once 'vendor/autoload.php';

// factory method
// $url - ссылка на страницу SomeSite
$someSiteParser = new SomeSiteParser('example.com');
$content = $someSiteParser->parse();

// abstract factory


// builder
$notification = new InfoNotificationBuilder();
$notification->setDesc('1');
$notification->setType('1');
$notification->setTitle('1');
$infoNotification = $notification->getNotification();

// singleton
$config1 = Config::getInstance();
$config1->setValue('value', '1');
$config2 = Config::getInstance();

// адаптер
$jsonData = new JsonData();
//echo $jsonData->read();

$xmlReader = new XmlReader();
$xmlData = new XmlData($xmlReader);
//echo $xmlData->read();

// Composite
$order = new Order();
$product = new Product();
$ingredient = new Ingredient();
$ingredient2 = new Ingredient();

$product->setChild($ingredient);
$product->setChild($ingredient2);
$order->setChild($product);

echo $order->getPrice();

// Decorator
$textInput = new TextInput();
$defaultText = $textInput->textFormat('какой то текст');
echo $defaultText;

$reversedText = new ReversTestFormatter($textInput);
echo $reversedText->textFormat($defaultText);
