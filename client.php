<?php

namespace Neetqw\Patterns\FactoryMethod;
use Neetqw\Patterns\Builder\InfoNotificationBuilder;
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
var_dump($infoNotification);

// singleton
$config1 = Config::getInstance();
$config1->setValue('value', '1');
$config2 = Config::getInstance();
echo $config2->getValue('value');