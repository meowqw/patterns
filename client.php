<?php

namespace Neetqw\Patterns\FactoryMethod;
require_once 'vendor/autoload.php';

// factory method
// $url - ссылка на страницу SomeSite
$someSiteParser = new SomeSiteParser('example.com');
$content = $someSiteParser->parse();

// abstract factory
