<?php

namespace Neetqw\Patterns\FactoryMethod;
require_once 'vendor/autoload.php';

// $url - ссылка на страницу SomeSite
$someSiteParser = new SomeSiteParser('example.com');
$content = $someSiteParser->parse();
echo $content;
