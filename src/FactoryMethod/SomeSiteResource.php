<?php

namespace Neetqw\Patterns\FactoryMethod;

/**
 * Конретный ресурс Some сайта
 */
class SomeSiteResource implements Resource
{
    private string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * Подлючение к сайту
     *
     * @return void
     */
    public function connect(): void
    {
        // соединяемся (переходим) на сайт
        $url = $this->url;
    }

    /**
     * Получение необходимого контента
     *
     * @return string
     */
    public function getContent(): string
    {
        // получаем контент
        return 'content';
    }
}