<?php

namespace Neetqw\Patterns\FactoryMethod;
use Neetqw\Patterns\Builder\InfoNotificationBuilder;

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