<?php

namespace Neetqw\Patterns\FactoryMethod;

/**
 * Конкретный создатель для парсинга опредленного сайта
 * (Конкретные Создатели — это классы, которые фактически использует Клиент)
 */
class SomeSiteParser extends SiteParser
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function getResource(): Resource
    {
        return new SomeSiteResource($this->url);
    }
}